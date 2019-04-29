<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Public/Admin/css/admin.css">
<script src="/Public/Admin/js/jquery.js"></script>   
<script src="/Public/Admin/js/pintuer.js"></script>
<style type="text/css">
	.dir{
		color: #000;
	    font-size: 14px;
	    font-weight: bold;
	    cursor: pointer;
	    padding-left: 35px;
	    background: url(/Public/Admin/images/dir.png) no-repeat 0 center;
		}
	.file{
		color: #000;
	    font-size: 14px;
	    font-weight: bold;
	    cursor: pointer;
	    padding-left: 35px;
	    background: url(/Public/Admin/images/flie.png) no-repeat 0 center;
		}
</style>
</head>
<body>  

  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 目录列表</strong> <a href="<?php echo U('Oss/create_dir');?>" style="float:right; "><strong class="icon-folder-o"> 创建目录</strong></a></div>
    <table class="table table-hover ">
      <tr>
        <th>名称</th>
        <th width="310">操作</th>
      </tr>
	      <?php foreach($data as $k => $v):?>
	    
	        <tr class="erse" >
	          <td>
	          <?php  if($v['type']=='file'){ $class= "class='ers file'"; }else{ $class= "class='ers dir'"; } if($k=='0' && $root==0){ $name='返回上一级'; }else{ $name = $v['name']; } ?>
	          	<a <?php echo ($class); ?> id="<?php echo ($k); ?>"  type=<?php echo ($v["type"]); ?>><?php echo ($name); ?></a>
	          	<form method="get" class="form_<?php echo ($k); ?>" action="<?php echo U('Oss/index');?>">
	       			<input type="hidden" name="prefix" value="<?php echo ($v["name"]); ?>">
	       			<input type="hidden" class="bucket"  value="<?php echo ($bucket); ?>">
	       		</form></td>
	       		<?php if($v['type']=='dir'){ echo "<td style='text-align:right;'><div class='button-group'></div></td>"; }else{ echo "<td style='text-align:right;'><div class='button-group'><a class='button border-main' href='http://$bucket.oss-cn-shanghai.aliyuncs.com/$v[name]'><span class='icon-arrow-down'></span>点击下载</a></div> <div class='button-group del' id='$k'><a class='button border-red'  href='javascript:void(0);'><span class='icon-trash-o'></span>点击删除</a></div><form method='get' class='form1_$k' action='/index.php/Admin/Oss/del.html'><input type='hidden' name='delname' value='$v[name]'></form></td>"; }?>
	        </tr>
	      <?php endforeach;?>  
    </table>
  </div> 

<script type="text/javascript">

$(".ers").click(function(){

	var type = $(this).attr('type');
	var bucket = $('.bucket').val();

	if(type=='file'){
		var name = $(this).text();
		window.open('http://'+bucket+'.oss-cn-shanghai.aliyuncs.com/'+name);
		return false;
	}
	var id = $(this).attr('id');
	$(".form_"+id).submit();
})


$(".del").click(function(){
	if(confirm('确定要删除！')){
		var id = $(this).attr('id');
		$(".form1_"+id).submit();
	}
})

</script>
</body>
</html>