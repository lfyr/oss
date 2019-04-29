<?php
namespace Admin\Controller;
use Component\CommonController;
class OssController extends CommonController {
    public function index(){
  		require_once 'oss/samples/Object.php';

      $buckets=session('bucket');// 根据管理员选择库
      if(!empty($buckets)){
        $orgin_str = file_get_contents('./oss/samples/Config.php');
        $update_str = str_replace("OSS_TEST_BUCKET = '$bucket'", "OSS_TEST_BUCKET = '$buckets'", $orgin_str);
        file_put_contents('./oss/samples/Config.php', $update_str);
      }

  		$root_dir=session('root_dir'); //根据管理员选择根目录
  		if(!empty($root_dir)){
  			$prefix=$_GET['prefix'] ? $_GET['prefix'].'/' : $root_dir.'/'; //目录名
  		}else{
  			$prefix=$_GET['prefix'] ? $_GET['prefix'].'/' : $root_dir; //目录名
  		}
  		
  		
  		//取出目录文件
		  $dirname=listObjects($ossClient, $bucket, $prefix);

		//禁止点击空目录
		// if($dirname==NULL){
  // 			$this->error('该目录下没有文件');
  // 			exit;
  // 		}
	
		if(!empty($prefix)){
			$dirname[0]['name'] = substr($dirname[0]['name'],0,strrpos($dirname[0]['name'],'/')); //上一级
			$dirname[0]['type'] = 'dir';
			$root=0;
		}else{
			$root=1;
		}

		$this->assign('data',$dirname);
		$this->assign('root',$root);
		$this->assign('bucket',$bucket);
		
        $this-> display();
    }


    public function upload(){
    	require_once 'oss/samples/Object.php';
    	if(IS_POST){
        #设置这个脚本可以执行的时间，单位：秒，0：代表一直执行到结束，默认30秒
        set_time_limit(0);
    		//文件名
  			// $name=$_FILES['file']['name'];
  			$name=iconv('UTF-8','GB2312',$name);

			//①上传本地文件
			$serverPath=$_POST['dir'];  //服务器目录
			$filePath=$_FILES['file']['tmp_name']; //本地文件目录
			$fileName = $_FILES['file']['name'];  //上传文件名
			if(!empty($serverPath)){
				$object=$serverPath.'/'.$fileName;
			}else{
				$object=$fileName;
			}
			$result = uploadFile($ossClient, $bucket, $object, $filePath);
      
      if($result['erro']==0){
        $this->error('上传文件不能为空');
        exit;
      }
			$this->success('上传成功！');
			exit;
    	}

    	//取出目录分类
    	$root_dir=session('root_dir');	
    	$dirList=getDirList($ossClient, $bucket);
    	if(!empty($root_dir)){
  			foreach ($dirList as $k => $v) {
		    	if($k!=$root_dir){
		    			unset($dirList[$k]);
		    	}
		    }
	  	}
    	$this->assign('dirList',$dirList);
        $this -> display();
    }

    public function upload_Dir(){
    	require_once 'oss/samples/MultipartUpload.php';
    	require_once 'oss/samples/Object.php';
      // var_dump($_POST);die;
    	if(IS_POST){
        #设置这个脚本可以执行的时间，单位：秒，0：代表一直执行到结束，默认30秒
        set_time_limit(0);
    		$localDirectory=$_POST['upload_dir'];
    		
    		$prefix=$_POST['sever_dir'];

			  $result=uploadDir($ossClient, $bucket, $localDirectory, $prefix);
        if($result['erro']==0){
        $this->error('本地目录不能为空');
        exit;
        }
        $this->success('上传成功！');
        exit;
    	}

    	//取出目录分类
    	$root_dir=session('root_dir');
    	$dirList=getDirList($ossClient, $bucket);

    	if(!empty($root_dir)){
  				foreach ($dirList as $k => $v) {
		    		if($k!=$root_dir){
		    			unset($dirList[$k]);
		    		}
		    	}
	  		}

    	$this->assign('dirList',$dirList);
    	$this -> display();
    }

    public function create_dir(){
    	require_once 'oss/samples/Object.php';
    	if(IS_POST){
        if(empty($_POST['dir_name'])){
          $this->error('目录名不能为空！', U('Oss/create_dir'));
          exit;
        }

    		$root_dir=session('root_dir');
    		if(!empty($root_dir)){
  				$dirname=$root_dir.'/'.$_POST['dir_name'];
	  		}else{
	  			$dirname=$_POST['dir_name'];
	  		}
	    	$ret=createObjectDir($ossClient, $bucket, $dirname);
	    	if($ret['erro']==1){
          $this->success('目录创建成功！',U('Oss/index'));
          exit;
        }
    	}
    	$this->display();

    }

    public function del(){
      require_once 'oss/samples/Object.php';
      //删除文件
      $object=$_GET['delname'];
      if(!empty($object)){
        $ret=deleteObject($ossClient, $bucket, $object);
        if($ret['erro']==1){
          $this->success('文件删除成功！');
          exit;
        }
      }
    }
    public function kqh(){
      require_once 'oss/samples/Object.php';
      $km=$_GET['km'];
      $orgin_str = file_get_contents('./oss/samples/Config.php');
      $update_str = str_replace("OSS_TEST_BUCKET = '$bucket'", "OSS_TEST_BUCKET = '$km'", $orgin_str);

      file_put_contents('./oss/samples/Config.php', $update_str);
      $this->success('切换成功！', U('Oss/index'));
    }
}