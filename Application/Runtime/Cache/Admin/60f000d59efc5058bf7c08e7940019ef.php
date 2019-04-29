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
    <script src="/Public/Admin/js/ajaxfileupload.js"></script>
    <script src="/Public/Admin/js/pintuer.js"></script>  

</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 上传目录</strong><span style="color:red;"> (可支持上传不超过5GB大小的文件且所有文件为英文命名)<span/></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo U('Oss/upload_dir');?>">
      <div class="form-group">
        <div class="label">
          <label>上传目录：</label>
        </div> 
        <div class="field">
            <select name="sever_dir" class="input w50">
            <?php if(empty(session('root_dir'))){ echo "<option value=''>根目录</option>"; }?>
              <?php foreach($dirList as $k=>$v):?>
              <option value="<?php echo ($k); ?>"><?php echo ($k); ?></option>
              <?php foreach($v as $k1=>$v1):?>
                <?php foreach($v1 as $k2=>$v2):?>
                  <?php if($v2['type']=='dir'){ echo "<option value='$v2[name]'>------$v2[name]</option>"; }?>
              
                <?php endforeach;?>
              <?php endforeach;?>
            <?php endforeach;?>
            </select>
            <div class="tips" title=""></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>本地目录：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="upload_dir" value="">
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>