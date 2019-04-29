<?php
require_once __DIR__ . '/Common.php';
header("Content-type: text/html; charset=utf-8"); 
use OSS\OssClient;
use OSS\Core\OssException;
$bucket = Common::getBucketName();
$ossClient = Common::getOssClient();
if (is_null($ossClient)) exit(1);
//*******************************简单使用***************************************************************

// createObjectDir($ossClient, $bucket);
/**
 * 创建虚拟目录
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function createObjectDir($ossClient, $bucket, $dirname)
{
    try {
        $ossClient->createObjectDir($bucket, $dirname);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    // print(__FUNCTION__ . ": OK" . "\n");
    $message['erro']=1;
    return $message;
}
/**
 * 把本地变量的内容到文件
 *
 * 简单上传,上传指定变量的内存值作为object的内容
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function putObject($ossClient, $bucket)
{
    $object = "oss-php-sdk-test/upload-test-object-name.txt";
    $content = file_get_contents(__FILE__);
    $options = array();
    try {
        $ossClient->putObject($bucket, $object, $content, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}
/**
 * 上传指定的本地文件内容
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */ 
function uploadFile($ossClient, $bucket, $object, $filePath)
{
    $object = $object;

    $filePath = $filePath;
    // var_dump($object);die;

    try{
        $ossClient->uploadFile($bucket, $object, $filePath);
    } catch(OssException $e) {
        // printf(__FUNCTION__ . ": FAILED\n");
        $message['erro']=0;
        return $message;
    }
    $message['erro']=1;
    return $message;
}
// uploadFile($ossClient, $bucket, $object, $filePath)


function listObjects($ossClient, $bucket, $prefix)
{
    $prefix = $prefix;
    $delimiter = '/';
    $nextMarker = '';
    $maxkeys = 1000;
    $options = array(
        'delimiter' => $delimiter,
        'prefix' => $prefix,
        'max-keys' => $maxkeys,
        'marker' => $nextMarker,
    );
    try {
        $listObjectInfo = $ossClient->listObjects($bucket, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    //print(__FUNCTION__ . ": OK" . "\n");
    $objectList = $listObjectInfo->getObjectList(); // 文件列表
    $prefixList = $listObjectInfo->getPrefixList(); // 目录列表
    $i=0;
    if (!empty($objectList)) {
        //print("objectList:\n");
        
        foreach ($objectList as $objectInfo) {

            // print($objectInfo->getKey() . "\n");
            $str=$objectInfo->getKey();
             
            $res[$i]['type'] = 'file';
            $res[$i]['name']=rtrim($str, "/");
            $i++;

        }
    } 
    if (!empty($prefixList)) {
        //print("prefixList: \n");
        foreach ($prefixList as $prefixInfo) {
            $str=$prefixInfo->getPrefix();
            $res[$i]['type'] = 'dir';
            $res[$i]['name']=rtrim($str, "/");
            $i++;       
        }
    }       
            return $res;
}


function listDir($ossClient, $bucket, $prefix='')
{
    $prefix = $prefix;
    $delimiter = '/';
    $nextMarker = '';
    $maxkeys = 1000;
    $options = array(
        'delimiter' => $delimiter,
        'prefix' => $prefix,
        'max-keys' => $maxkeys,
        'marker' => $nextMarker,
    );
    try {
        $listObjectInfo = $ossClient->listObjects($bucket, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    //print(__FUNCTION__ . ": OK" . "\n");
    $objectList = $listObjectInfo->getObjectList(); // 文件列表
    $prefixList = $listObjectInfo->getPrefixList(); // 目录列表
    $i=0;
    if (!empty($objectList)) {
        //print("objectList:\n");
        
        foreach ($objectList as $objectInfo) {

            // print($objectInfo->getKey() . "\n");
            $str=$objectInfo->getKey();
             
            $res[$i]['type'] = 'file';
            $res[$i]['name']=rtrim($str, "/");
            $i++;

        }
    } 
    if (!empty($prefixList)) {
        //print("prefixList: \n");
        foreach ($prefixList as $prefixInfo) {
            $str=$prefixInfo->getPrefix();
            $res[$i]['type'] = 'dir';
            $res[$i]['name']=rtrim($str, "/");
            $i++;       
        }
    }       
            return $res;
}


$dirList=array();

function getDirList($ossClient, $bucket){
    $res=listDir($ossClient, $bucket);

    foreach ($res as $k => $v) {
        $erji=$v['name'].'/';
        $rs=listDir($ossClient, $bucket,$erji);
        
        foreach ($rs as $k1 => $v1) {
            $dirList[$v['name']]['son'][]=$v1;
        }
    }
    return $dirList;
}

/**
 * 获取object的内容
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function getObject($ossClient, $bucket)
{
    $object = "oss-php-sdk-test/upload-test-object-name.txt";
    $options = array();
    try {
        $content = $ossClient->getObject($bucket, $object, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    if (file_get_contents(__FILE__) === $content) {
        print(__FUNCTION__ . ": FileContent checked OK" . "\n");
    } else {
        print(__FUNCTION__ . ": FileContent checked FAILED" . "\n");
    }
}
/**
 * get_object_to_local_file
 *
 * 获取object
 * 将object下载到指定的文件
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function getObjectToLocalFile($ossClient, $bucket)
{
    $object = "oss-php-sdk-test/upload-test-object-name.txt";
    $localfile = "upload-test-object-name.txt";
    $options = array(
        OssClient::OSS_FILE_DOWNLOAD => $localfile,
    );
    try {
        $ossClient->getObject($bucket, $object, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK, please check localfile: 'upload-test-object-name.txt'" . "\n");
    if (file_get_contents($localfile) === file_get_contents(__FILE__)) {
        print(__FUNCTION__ . ": FileContent checked OK" . "\n");
    } else {
        print(__FUNCTION__ . ": FileContent checked FAILED" . "\n");
    }
    if (file_exists($localfile)) {
        unlink($localfile);
    }
}
/**
 * 拷贝object
 * 当目的object和源object完全相同时，表示修改object的meta信息
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function copyObject($ossClient, $bucket)
{
    $fromBucket = $bucket;
    $fromObject = "oss-php-sdk-test/upload-test-object-name.txt";
    $toBucket = $bucket;
    $toObject = $fromObject . '.copy';
    $options = array();
    try {
        $ossClient->copyObject($fromBucket, $fromObject, $toBucket, $toObject, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}
/**
 * 修改Object Meta
 * 利用copyObject接口的特性：当目的object和源object完全相同时，表示修改object的meta信息
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function modifyMetaForObject($ossClient, $bucket)
{
    $fromBucket = $bucket;
    $fromObject = "oss-php-sdk-test/upload-test-object-name.txt";
    $toBucket = $bucket;
    $toObject = $fromObject;
    $copyOptions = array(
        OssClient::OSS_HEADERS => array(
            'Cache-Control' => 'max-age=60',
            'Content-Disposition' => 'attachment; filename="xxxxxx"',
        ),
    );
    try {
        $ossClient->copyObject($fromBucket, $fromObject, $toBucket, $toObject, $copyOptions);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}
/**
 * 获取object meta, 也就是getObjectMeta接口
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function getObjectMeta($ossClient, $bucket)
{
    $object = "oss-php-sdk-test/upload-test-object-name.txt";
    try {
        $objectMeta = $ossClient->getObjectMeta($bucket, $object);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    if (isset($objectMeta[strtolower('Content-Disposition')]) &&
        'attachment; filename="xxxxxx"' === $objectMeta[strtolower('Content-Disposition')]
    ) {
        print(__FUNCTION__ . ": ObjectMeta checked OK" . "\n");
    } else {
        print(__FUNCTION__ . ": ObjectMeta checked FAILED" . "\n");
    }
}
/**
 * 删除object
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function deleteObject($ossClient, $bucket, $object)
{
    $object = $object;
    try {
        $ossClient->deleteObject($bucket, $object);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    //print(__FUNCTION__ . ": OK" . "\n");
    $message['erro']=1;
    return $message;
}

// deleteObject($ossClient, $bucket);
/**
 * 批量删除object
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function deleteObjects($ossClient, $bucket)
{
    $objects = array();
    $objects[] = "oss-php-sdk-test/upload-test-object-name.txt";
    $objects[] = "oss-php-sdk-test/upload-test-object-name.txt.copy";
    try {
        $ossClient->deleteObjects($bucket, $objects);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}
/**
 * 判断object是否存在
 *
 * @param OssClient $ossClient OssClient实例
 * @param string $bucket 存储空间名称
 * @return null
 */
function doesObjectExist($ossClient, $bucket)
{
    $object = "oss-php-sdk-test/upload-test-object-name.txt";
    try {
        $exist = $ossClient->doesObjectExist($bucket, $object);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    var_dump($exist);
}