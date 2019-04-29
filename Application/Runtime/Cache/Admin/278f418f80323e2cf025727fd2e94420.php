<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <script src="/renshi/Public/Admin/jquery-1.8.3.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>智考人事后台系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/renshi/Public/Admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/renshi/Public/Admin/bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/renshi/Public/Admin/bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/renshi/Public/Admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/renshi/Public/Admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/renshi/Public/Admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/renshi/Public/Admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/renshi/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/renshi/Public/Admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/renshi/Public/Admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/renshi/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<span class="aStatus" style="display:none;"><?php echo ($_SESSION['aStatus']); ?></span>
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>智考人事后台</b>系统</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/renshi/Public/Admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">欢迎您：
                            <?php
 if(isset($_SESSION['aId'])){ echo $_SESSION['aUser']; }else{ echo ''; } ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/renshi/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo U('Admin/Login/login');?>" class="btn btn-default btn-flat">退出登录</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/renshi/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>智考欢迎您</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
				<li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>智考中心</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
						<li class="active"><a href="<?php echo U('/Admin/Index/index');?>"><i class="fa fa-circle-o"></i>智考首页</a></li>
                    </ul>
                </li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i> <span>员工管理</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="add"><a href="<?php echo U('/Admin/User/add');?>"><i class="fa fa-circle-o"></i>员工添加</a></li>
                        <li><a href="<?php echo U('/Admin/User/lists');?>"><i class="fa fa-circle-o"></i> 在职员工列表</a></li>
                        <li><a href="<?php echo U('/Admin/User/dimission');?>"><i class="fa fa-circle-o"></i> 离职员工列表</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                
<link href="/renshi/Public/Css/mypage.css" rel="stylesheet" type="text/css"/>
    <div style="border 1px solid #ccc;width:1200px;height:66px;position:relative;">
    <div style="position:absolute;float:left;">离职员工列表</div>
        <a class="add" style="width:100px;height:30px;float:left;font-size:12px;margin-left:200px;margin-top:2px;" href="<?php echo U('Admin/User/add');?>" style="margin-left:15px;">添加员工</a>
        <a class="download" href="<?php echo U('Admin/User/leavedownload');?>" style="width:100px;height:30px;float:left;font-size:12px;margin-top:2px;">离职下载</a>
        <div class="has-feedback" style="float:left;">
            <form action="/renshi/index.php/Admin/User/dimission" method="GET">
                <input type="text" name="stName" id="search_box" placeholder="请输入搜索名称" value="<?php echo I('get.stName'); ?>" style="width:150px;height:30px;margin-left:888px;font-size:13px;"/>
                <input type="submit" value="搜索" style="background-color:#3C8DBC;width:60px;height:30px;margin-top:-10px;font-size:13px;">
            </form>
        </div>
    </div>

                
            </h1>
            <!-- <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol> -->
        </section>


        <!-- Main content -->
        <section class="content" style="display:none;">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->
            <!-- Main row -->
        </section><!-- /.content -->
        
<style type="text/css">
    .font-text{
        font-size:8px;
    }
</style>
    <script src="/renshi/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <span class="aStatus" style="display:none;"><?php echo ($_SESSION['aStatus']); ?></span>
        <div class="col-md-9">
            <div class="box box-primary" style="width:1270px;">
                <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" style="border 1px solid #ccc;">
                            <thead>
                            <form action="/renshi/index.php/Admin/User/dimission" method="get">
                                <tr>
                                    <!-- <th class="text"></th> -->
                                    <!-- <th class="text dropdown hidden-xs">序号</th> -->
                                    <th class="font-text">工号</th>
                                    <th class="font-text">姓名</th>
                                    <th class="font-text xiaoqu">校区 
                                        <select name="stCampus" id="" style="width:51px;">
                                            <option value=""></option>
                                            <option value="1" <?php if(I('get.stCampus')==1) {echo ' selected="selected"';}?>>安居校区</option>
                                            <option value="2" <?php if(I('get.stCampus')==2) {echo ' selected="selected"';}?>>华冶校区</option>
                                            <option value="3" <?php if(I('get.stCampus')==3) {echo ' selected="selected"';}?>>曙光校区</option>
                                        </select>
                                    </th>
                                    <th class="font-text">所属部门
                                        <select name="stSection" id="" style="width:51px;">
                                            <option value=""></option>
                                            <option value="1" <?php if(I('get.stSection')==1) {echo ' selected="selected"';}?>>市场部</option>
                                            <option value="2" <?php if(I('get.stSection')==2) {echo ' selected="selected"';}?>>技术部</option>
                                            <option value="3" <?php if(I('get.stSection')==3) {echo ' selected="selected"';}?>>教学部</option>
                                            <option value="4" <?php if(I('get.stSection')==4) {echo ' selected="selected"';}?>>人事部</option>
                                        </select>
                                        <!-- <select name="stSection" id="" style="width:51px;">
                                            <option value=""></option>
                                            <option value="1">php开发</option>
                                            <option value="2">教学部</opt ion>
                                            <option value="3">人事部</option>
                                        </select> -->
                                    </th>
                                    <th class="font-text">所属科室
                                        <select name="stDepartments" id="" style="width:51px;">
                                            <option value=""></option>
                                            <option value="1" <?php if(I('get.stDepartments')==1) {echo ' selected="selected"';}?>>技术科</option>
                                            <option value="2" <?php if(I('get.stDepartments')==2) {echo ' selected="selected"';}?>>教学科</option>
                                        </select>
                                    </th>
                                    <th class="font-text">所属岗位
                                        <select name="stPost" id="" style="width:51px;">
                                            <option value=""></option>
                                             <option value="1" <?php if(I('get.stPost')==1){ echo 'selected="selected"';}?>>PHP开发</option>
                                            <option value="2" <?php if(I('get.stPost')==2){ echo 'selected="selected"';}?>>市场调研</option>
                                             <option value="3" <?php if(I('get.stPost')==3){ echo 'selected="selected"';}?>>教师</option>
                                            <option value="4" <?php if(I('get.stPost')==4){ echo 'selected="selected"';}?>>人事专员</option>
                                        </select>
                                    </th>
                                    <th class="font-text">性别
                                       <select name="stSex" id="" style="width:51px;">
                                            <option value=""></option>
                                            <option value="1" <?php if(I('get.stSex')==1) {echo ' selected="selected"';}?>>男</option>
                                            <option value="2" <?php if(I('get.stSex')==2) {echo ' selected="selected"';}?>>女</option>
                                        </select>
                                    </th>
                                    <th class="font-text">
                                    <input type="submit" value="查询" style="background-color:#3C8DBC;">
                                    电话</th>
                                    <th class="font-text">职位</th>
                                    <th class="font-text">入职时间</th>
                                    <th class="font-text" style="display:none">身份证号</th>
                                    <th class="font-text">出生日期</th>
                                    <th class="font-text">年龄</th>
                                    <th class="font-text">学历</th>
                                    <th class="font-text">专业</th>
                                    <th class="font-text">任职状态</th>
                                    <th class="font-text" id="caozuo">操作</th>
                                    <th class="font-text" style="display:none">人员<br>状态</th>
                                    <th class="font-text" style="display:none">政治面貌</th>
                                    <th class="font-text" style="display:none">婚姻</th>
                                    <th class="font-text" style="display:none">民族</th>
                                    <th class="font-text" style="display:none">毕业日期</th>
                                    <th class="font-text" style="display:none">毕业学校</th>
                                    <th class="font-text" style="display:none">工龄</th>
                                    <th class="font-text" style="display:none">紧急电话</th>
                                    <th class="font-text" style="display:none">籍贯</th>
                                    <th class="font-text" style="display:none">身份证地址</th>
                                    <th class="font-text" style="display:none">现居地</th>
                                    <th class="font-text" style="display:none">身高</th>
                                    <th class="font-text" style="display:none">体重</th>
                                    <th class="font-text" style="display:none">外语水平</th>
                                    <th class="font-text" style="display:none">外语种</th>
                                    <th class="font-text" style="display:none">是否有资格证</th>
                                    <th class="font-text" style="display:none">合同起始日期</th>
                                    <th class="font-text" style="display:none">合同结束日期</th>
                                    <th class="font-text" style="display:none">照片</th>
                                </tr>
                            </form>
                                <script type="text/javascript">
                                    $(".xiaoqu").click(function(){
                                        $(".model_xiaoqu").css("display",'block');
                                    });
                                </script>
                            </thead>
                            <tbody>
                                <?php if(is_array($rs_staffLists)): foreach($rs_staffLists as $key=>$val_staffLists): ?><tr class="text-c">
                                        <!-- <td><input type="checkbox" id="node" name="node[]" value="<?php echo ($val_staffLists["stId"]); ?>"/></td>  -->
                                        <!-- <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stId"]); ?></td> -->
                                        <td><?php echo ($val_staffLists["stJobNumber"]); ?></td>
                                        <td><a href="<?php echo U('Admin/User/leaveDetail',array('id'=>$val_staffLists['stId']));?>"><?php echo ($val_staffLists["stName"]); ?></a></td>
                                        <?php  if($val_staffLists['stCampus'] == 1){ echo "<td>安居校区</td>"; }else if($val_staffLists['stCampus'] == 2){ echo "<td>华冶校区</td>"; }else if($val_staffLists['stCampus'] == 3){ echo "<td>曙光校区</td>"; } ?>
                                        <?php  if($val_staffLists['stSection'] == 1){ echo "<td>市场部</td>"; }else if($val_staffLists['stSection'] == 2){ echo "<td>技术部</td>"; }else if($val_staffLists['stSection'] == 3){ echo "<td>教学部</td>"; }else if($val_staffLists['stSection'] == 4){ echo "<td>人事部</td>"; } ?> 
                                        <?php  if($val_staffLists['stDepartments'] == 1){ echo "<td>技术科</td>"; }else if($val_staffLists['stDepartments'] == 2){ echo "<td>教学科</td>"; } ?>  
                                        <?php  if($val_staffLists['stPost'] == 1){ echo "<td>php开发</td>"; }else if($val_staffLists['stPost'] == 2){ echo "<td>市场调研</td>"; }else if($val_staffLists['stPost'] == 3){ echo "<td>教师</td>"; }else if($val_staffLists['stPost'] == 4){ echo "<td>人事专员</td>"; } ?>               
                                        <!-- <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stCampus"]); ?></td>         -->
                                        <!-- <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stSection"]); ?></td> -->
                                        <!-- <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stDepartments"]); ?></td>  -->
                                        <!-- <td><?php echo ($val_staffLists["stPost"]); ?></td> -->
                                        <?php  if($val_staffLists['stSex'] == 1){ echo "<td>男</td>"; }else if($val_staffLists['stSex'] == 2){ echo "<td>女</td>"; } ?> 
                                        <td><?php echo ($val_staffLists["stPhone"]); ?></td>
                                        <td><?php echo ($val_staffLists["stJob"]); ?></td>
                                        <td><?php echo ($val_staffLists["stEntryTime"]); ?></td>
                                        <!-- <?php if($val_staffLists["stSex"] == 1): ?><td>男</td>
                                        <?php else: ?>
                                        <td>女</td><?php endif; ?> -->
                                        <td style="display:none;"><?php echo ($val_staffLists["stIdentity"]); ?></td>
                                        <?php
 $a=substr($val_staffLists['stIdentity'],6,4); $b=substr($val_staffLists['stIdentity'],10,2); $c=substr($val_staffLists['stIdentity'],12,2); $stBirthDate=$a."-".$b."-".$c; ?>
                                        <td class="dropdown hidden-xs"><?php echo ($stBirthDate); ?></td>
                                        <?php $nowTime=time(); $stBirthDate=strtotime($stBirthDate); $stAge = round(((($nowTime-$stBirthDate)/86400)/365),0); ?>
                                        <td class="dropdown hidden-xs"><?php echo ($stAge); ?></td>
                                        <td><?php echo ($val_staffLists["stEducation"]); ?></td>
                                        <td><?php echo ($val_staffLists["stMajob"]); ?></td>
                                        <?php  if($val_staffLists['stTakeStatus'] == 0){ echo "<td>实习</td>"; }else if($val_staffLists['stTakeStatus'] == 1){ echo "<td>试用</td>"; }else{ echo "<td>转正</td>"; } ?>
                                        <th class="td-manage dropdown hidden-xs">
                                            <a title="编辑员工资料" href="<?php echo U('Admin/User/edit',array('id'=>$val_staffLists['stId']));?>"><i class="glyphicon glyphicon-pencil" style="margin-right: 10px;"></i></a>
                                            
                                            <a onclick="confirm;if(confirm('确认删除点确认')){alert('已经删除')}else{ return false;}" title="删除" href="<?php echo U('Admin/User/delete',array('id'=>$val_staffLists['stId']));?>" ><i class="glyphicon glyphicon-remove"></i></a>
                                        </th>
                                        <td style="display:none">
                                            <?php if($val_staffLists["stPersonnelStatus"] == 0): ?>在职
                                            <?php else: ?>
                                            离职<?php endif; ?>
                                        </td>
                                        <td style="display:none"><?php echo ($val_staffLists["stPoliticsStatus"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stMaritalStatus"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stNation"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stGraduationDate"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stSchoolTag"]); ?></td>
                                        <?php $nowTime=time(); $stEntryTime=strtotime($val_staffLists["stEntryTime"]); $quiteYear=strtotime($val_staffLists["stDepartureTime"]); if($quiteYear!=0){ $nowWorkingYear=round(((($quiteYear-$stEntryTime)/86400)/365),1); }else{ $nowWorkingYear=round(((($nowTime-$stEntryTime)/86400)/365),1); } ?>
                                        <td class="dropdown hidden-xs" style="display:none"><?php echo ($nowWorkingYear); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stEmergencyPhone"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stNativePlace"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stIdentityPlace"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stResidence"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stHeight"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stWeight"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stForeignLanguageLevel"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stForeignType"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stTeacherCard"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stPactBegin"]); ?></td>
                                        <td style="display:none"><?php echo ($val_staffLists["stPactFinish"]); ?></td>
                                        <td style="display:none"><img src="<?php echo ($val_staffLists["stPhoto"]); ?>"></td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>  
                        </table><!-- /.table -->
                                <tr class="content">
                                    <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>-->
                                    <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
                                            <?php echo ($page); ?>
                                    </div></td>  
                                </tr>
                    </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
            </div><!-- /. box -->
        </div><!-- /.col -->
        <script type="text/javascript">
            $(document).ready(function(){
                if($('.aStatus').text()==0){
                    $(".td-manage").css('display','block');
                    $("#caozuo").css('display','block');
                    $(".add").css("display","block");
                    $(".download").css("display","block");
                }else{
                    $(".td-manage").css('display','none');
                    $("#caozuo").css('display','none');
                    $(".add").css("display","none");
                    $(".download").css("display","none");
                }
            });
        </script>

    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>智考教育版权所有</b> 
        </div>
        <span>Copyright &copy; 2012-2020 zhikaoedu.All Rights Reserved.<a href="http://almsaeedstudio.com"></a></span>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="/renshi/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/renshi/Public/Admin/bootstrap/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/renshi/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/renshi/Public/Admin/bootstrap/js/raphael-min.js"></script>
<script src="/renshi/Public/Admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/renshi/Public/Admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/renshi/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/renshi/Public/Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/renshi/Public/Admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="/renshi/Public/Admin/bootstrap/js/moment.min.js"></script>
<script src="/renshi/Public/Admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/renshi/Public/Admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/renshi/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/renshi/Public/Admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/renshi/Public/Admin/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="/renshi/Public/Admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/renshi/Public/Admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/renshi/Public/Admin/dist/js/demo.js"></script>
<script type="text/javascript">
    if($('.aStatus').text()==0){
        $(".add").css("display","block");
    }else{
        $(".add").css("display","none");
    }
</script>
</body>
</html>