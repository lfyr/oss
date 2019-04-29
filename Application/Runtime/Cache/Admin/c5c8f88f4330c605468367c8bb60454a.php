<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑页面</title>
</head>
<body>
	<form method="post" action="<?php echo U('Admin/User/update');?>" class="form-horizontal" id="form-admin-add">
        <div class="form-group">
            <label class="col-sm-1 control-label">标题</label>
            <div class="col-sm-3">
                <input type="text" name="content_Title" id="content_Title" value="<?php echo ($info["content_Title"]); ?>" placeholder="请输入标题名称" class="form-control">
            </div>
            <label class="col-sm-1 control-label">标题路径</label>
            <div class="col-sm-3">
                <input type="text" name="stName" value="<?php echo ($info["title_Url"]); ?>" id="stName" placeholder="请输入标题" class="form-control">
            </div>
            <div class="col-sm-3">
                <input type="text" name="id" value="<?php echo ($info["id"]); ?>" id="id" class="form-control">
            </div>
        	<input type="submit" value="提交">
        </div>
    </form>
</body>
</html>