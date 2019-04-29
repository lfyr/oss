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
                
离职员工详情
<a href="<?php echo U('Admin/User/dimission');?>"><strong style="font-size:15px;">&nbsp;&nbsp;< 返回</strong></a>

                
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
        
    <div class="box box-warning">
    <style type="text/css">
        .control-detail{
            font-size:18px;
            color:blue;
        }
    </style>
    <?php if(is_array($leaveDetail)): foreach($leaveDetail as $key=>$vo): ?><div class="box-body">
            <form method="post" action="<?php echo U('Admin/User/insert');?>" class="form-horizontal" id="form-admin-add" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-2 control-label">姓名:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stName']); ?></label>
                    <label class="col-sm-2 control-label">人员状态:</label>
                    <label class="col-sm-2 control-detail">
                    <?php if($vo["stPersonnelStatus"] == 0): ?>在职
                    <?php else: ?>
                    离职<?php endif; ?>
                    </label>
                </div>
                <hr> 
                <div class="form-group">
                    <label class="col-sm-2 control-label">离职时间：</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stLeaveTime']); ?></label>
                    <label class="col-sm-2 control-label">离职原因:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stLeaveReason']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">身份证号</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stIdentity']); ?></label>
                    <label class="col-sm-2 control-label">出生日期</label>
                    <label class="col-sm-2 control-detail">
                    <?php
 $a=substr($vo['stIdentity'],6,4); $b=substr($vo['stIdentity'],10,2); $c=substr($vo['stIdentity'],12,2); $stBirthDate=$a."-".$b."-".$c; ?>
                    <td class="dropdown hidden-xs"><?php echo ($stBirthDate); ?></td>
                    </label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">政治面貌</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stPoliticsStatus']); ?></label>
                    <label class="col-sm-2 control-label">婚姻状况:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stMaritalStatus']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">民族:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stNation']); ?></label>
                    <label class="col-sm-2 control-label">毕业日期</label>
                    <label class="col-sm-2 control-detail">
                    <?php echo ($vo['stGraduationDate']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">毕业学校:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stSchoolTag']); ?></label>
                    <label class="col-sm-2 control-label">工龄:</label>
                    <label class="col-sm-2 control-detail">
                    <?php $nowTime=time(); $stEntryTime=strtotime($vo["stEntryTime"]); $nowWorkingYear=round(((($nowTime-$stEntryTime)/86400)/365),1); ?>
                    <td class="dropdown hidden-xs"><?php echo ($nowWorkingYear); ?></td>
                    </label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">紧急联系人电话</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stEmergencyPhone']); ?></label>
                    <label class="col-sm-2 control-label">籍贯:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stNativePlace']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">身份证地址</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stIdentityPlace']); ?></label>
                    <label class="col-sm-2 control-label">现居地:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stResidence']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">身高</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stHeight']); ?></label>
                    <label class="col-sm-2 control-label">体重:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stWeight']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">外语水平</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stForeignLanguageLevel']); ?></label>
                    <label class="col-sm-2 control-label">外语种</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stForeignType']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">是否具备教师职格证:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stTeacherCard']); ?></label>
                    <label class="col-sm-2 control-label">合同起始时间</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stPactBegin']); ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">合同结束时间:</label>
                    <label class="col-sm-2 control-detail"><?php echo ($vo['stPactFinish']); ?></label>
                    <label class="col-sm-2 control-label">照片</label>
                    <label class="col-sm-2 control-detail"><img src="<?php echo ($vo['stPhoto']); ?>" width:50px;height:80px;></label>
                </div> 
            </form>
        </div><!-- /.box-body -->
        </div><!-- /.box --><?php endforeach; endif; ?>

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