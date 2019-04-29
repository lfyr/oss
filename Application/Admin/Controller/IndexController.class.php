<?php
namespace Admin\Controller;
use Component\CommonController;
class IndexController extends CommonController {
    public function index(){
    	header('Content-Type:text/html;charset=utf-8');
    	require_once 'oss/samples/Bucket.php';
    	$bucketList=listBuckets($ossClient);
    	$adminId=session('id');
    	#菜单数据
      	if($adminId==1){
        	$sql='select * from oss_privilege';

      	}else{
        	$sql='select d.* from oss_admin a 
        	left join oss_admin_role b on a.id=b.admin_id 
        	left join oss_role_privilege c on b.role_id=c.role_id 
        	left join oss_privilege d on c.pri_id=d.id where a.id='.$adminId;
      	}
	      	$db=M();
	      	$pri=$db->query($sql);
	      	$btn=array(); //放两级权限

        #从所有权限中全出前两级权限
        foreach ($pri as $k => $v) {
        
            //先找顶级权限
            if($v['parent_id']==0){

            foreach ($pri as $k1 => $v1) {

                if($v1['parent_id']==$v['id']){

                $v['children'][]=$v1;

                }
            }
            $btn[] = $v;
            }
        }

        $this->assign('btn',$btn);
    	$this->assign('bucketList',$bucketList);
        $this -> display();

    }
}