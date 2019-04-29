<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <script src="/Public/Admin/jquery-1.8.3.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Public/Admin/bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/Public/Admin/bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/Public/Admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/Public/Admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/Public/Admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/Public/Admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/Public/Admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/Public/Admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
            <span class="logo-lg"><b>后台</b>系统</span>
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
                            <img src="/Public/Admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">欢迎您：
                            <?php
 if(isset($_SESSION['aId'])){ echo $_SESSION['aUser']; }else{ echo ''; } ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                    <img src="/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p></p>
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
                        <li class="add"><a href="<?php echo U('/Admin/User/add');?>"><i class="fa fa-circle-o"></i>试题类型添加</a></li>
                        <li class="add"><a href="<?php echo U('/Admin/User/addExam');?>"><i class="fa fa-circle-o"></i>试题添加</a></li>
                        <li><a href="<?php echo U('/Admin/User/actionhehehe');?>"><i class="fa fa-circle-o"></i> 列表页</a></li>
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
                
试题详细信息添加

                
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
        <div class="box-header with-border">
        </div><!-- /.box-header -->
        <div class="box-body">
            <form action="<?php echo U('Admin/User/insertExam');?>" method="post">
                试卷类型：&nbsp;&nbsp;&nbsp;
                <select  name="zone_name">
                    <?php
 foreach($data as $k => $v){?>
                            <option value="<?php echo $v['zone_id'];?>"><?php echo $v['zone_name'];?></option>
                    <?php
 } ?>
                </select><br/>
                科目:
                <select class="subject" name="subject">
                    <?php
 foreach($subject as $k => $v){?>
                            <option value="<?php echo $v['id'];?>"><?php echo $v['subject'];?></option>
                    <?php
 } ?>
                </select>
                <br>
                試題:<input class='exam' type="text" name="exam" /><br/>
                解析:<input class="analysis" type="text" name="analysis" /><br/>
                <input class="sub" type="submit"  value="提交">  
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->




<link href="/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/datetimepicker/datepicker-zh_cn.js"></script>
<link rel="stylesheet" media="all" type="text/css" href="/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
<script type="text/javascript" src="/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript" src="/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>


<script type="text/javascript">
$(".sub").on("click",function(){
    var exam = $(".exam").val();
    var analysis = $(".analysis").val();
    if(exam ==null || exam ==0){
        alert("试题路径不能为空！");
        return false;
    }
    if(analysis ==null || analysis ==0){
        alert("解析路径不能为空！");
        return false;
    }
})

//添加时间插件
$.timepicker.setDefaults($.timepicker.regional['zh-CN']);//设置中文
$("#stLeaveTime").datepicker({ dateFormat: "yy-mm-dd" });
$("#stEntryTime").datepicker({ dateFormat: "yy-mm-dd" });
$("#stDepartureTime").datepicker({ dateFormat: "yy-mm-dd" });
$("#stBirthDate").datepicker({ dateFormat: "yy-mm-dd" });
$("#stGraduationDate").datepicker({ dateFormat: "yy-mm-dd" });
$("#stPactBegin").datepicker({ dateFormat: "yy-mm-dd" });
$("#stPactFinish").datepicker({ dateFormat: "yy-mm-dd" });

// function Checkmember(){
//         var stJobNumber = $("input[name='stJobNumber']").val();
//         var stName = $("input[name='stName']").val();
//         var stCampus = $("#stCampus").val();
//         var stSection = $("#stSection").val();
//         var stDepartments = $("#stDepartments").val();
//         var stPost = $("#stPost").val();
//         var stJob = $("input[name='stJob']").val();
//         var stPersonnelStatus = $("#stPersonnelStatus").val();
//         if(stPersonnelStatus==1){
//             $(".display").css('display','block');
//         }else{
//             $(".display").css("display",'none');
//         }
//         var stLeaveTime = $("input[name='stLeaveTime']").val();
//         var stLeaveReason = $("input[name='stLeaveReason']").val();
//         var stEntryTime = $("input[name='stEntryTime']").val();
//         var stSex = $("#stSex").val();
//         var stIdentity = $("input[name='stIdentity']").val();
//         var stPoliticsStatus = $("input[name='stPoliticsStatus']").val();
//         var stMaritalStatus = $("input[name='stMaritalStatus']").val();
//         var stNation = $("input[name='stNation']").val();
//         var stEducation = $("input[name='stEducation']").val();
//         var stGraduationDate = $("input[name='stGraduationDate']").val();
//         var stSchoolTag = $("input[name='stSchoolTag']").val();
//         var stPhone = $("input[name='stPhone']").val();
//         var stMajob = $("input[name='stMajob']").val();
//         var stEmergencyPhone = $("input[name='stEmergencyPhone']").val();
//         var stNativePlace = $("input[name='stNativePlace']").val();
//         var stIdentityPlace = $("input[name='stIdentityPlace']").val();
//         var stResidence = $("input[name='stResidence']").val();
//         var stHeight = $("input[name='stHeight']").val();
//         var stWeight = $("input[name='stWeight']").val();
//         var stForeignLanguageLevel = $("input[name='stForeignLanguageLevel']").val();
//         var stForeignType = $("input[name='stForeignType']").val();
//         var stTeacherCard = $("input[name='stTeacherCard']").val();
//         var stTakeStatus = $("#stTakeStatus").val();
//         var stPactBegin = $("input[name='stPactBegin']").val();
//         var stPactFinish = $("input[name='stPactFinish']").val();

//         if(stJobNumber == null || stJobNumber == 0){
//             alert('工号不能为空');
//             return false;
//         }
//         if(stName == null || stName == 0){
//             alert('姓名不能为空');
//             return false;
//         }
//         if(stCampus == null || stCampus == 0){
//             alert('校区不能为空');
//             return false;
//         }

//         if(stSection == null || stSection == 0){
//             alert('所属部门不能为空');
//             return false;
//         }

//         if(stDepartments == null || stDepartments == 0){
//             alert('所属科室不能为空');
//             return false;
//         }

//         if(stPost == null || stPost == 0){
//             alert('所属岗位不能为空');
//             return false;
//         }

//         if(stJob == null || stJob == 0){
//             alert('职位不能为空');
//             return false;
//         }

//         if(stPersonnelStatus == 2){
//             alert('人员状态不能为空');
//             return false;
//         }

//         if(stPersonnelStatus == 1){
//             if(stLeaveTime == 0){
//                 alert('离职时间不能为空');return false;
//             }
//             if(stLeaveReason == 0){
//                 alert('离职原因不能为空');return false;
//             }
//         }

//         if(stEntryTime == null || stEntryTime == 0){
//             alert('入职时间不能为空');
//             return false;
//         }

//         if(stSex == null || stSex == 0){
//             alert('性别不能为空');
//             return false;
//         }

//         if(stIdentity == null ||stIdentity == 0){
//             alert('身份证号不能为空');
//             return false;
//         }

//         if(stPoliticsStatus == null || stPoliticsStatus == 0){
//             alert('政治面貌不能为空');
//             return false;
//         }

//         if(stMaritalStatus == null || stMaritalStatus == 0){
//             alert('婚姻状况不能为空');
//             return false;
//         }

//         if(stNation == null || stNation == 0){
//             alert('民族不能为空');
//             return false;
//         }

//         if(stEducation == null || stEducation == 0){
//             alert('学历不能为空');
//             return false;
//         }

//         if(stGraduationDate == null || stGraduationDate == 0){
//             alert('毕业时间不能为空');
//             return false;
//         }

//         if(stSchoolTag == null || stSchoolTag == 0){
//             alert('毕业学校不能为空');
//             return false;
//         }

//         if(stPhone == null || stPhone == 0){
//             alert('手机号不能为空');
//             return false;
//         }

//         if(stMajob == null || stMajob == 0){
//             alert('专业不能为空');
//             return false;
//         }

//         if(stEmergencyPhone == null || stEmergencyPhone == 0){
//             alert('紧急电话不能为空');
//             return false;
//         }

//         if(stNativePlace == null || stNativePlace == 0){
//             alert('籍贯不能为空');
//             return false;
//         }

//         if(stIdentityPlace == null || stIdentityPlace == 0){
//             alert('身份证地址不能为空');
//             return false;
//         }

//         if(stResidence == null || stResidence == 0){
//             alert('现住地不能为空');
//             return false;
//         }

//         if(stHeight == null || stHeight == 0){
//             alert('身高不能为空');
//             return false;
//         }

//         if(stWeight == null || stWeight == 0){
//             alert('体重不能为空');
//             return false;
//         }

//         if(stForeignLanguageLevel == null || stForeignLanguageLevel == 0){
//             alert('外语水平不能为空');
//             return false;
//         }

//         if(stForeignType == null || stForeignType == 0){
//             alert('外语种不能为空');
//             return false;
//         }

//         if(stTeacherCard == null || stTeacherCard == 0){
//             alert('教师职格证不能为空');
//             return false;
//         }

//         if(stTakeStatus != 0 && stTakeStatus != 1 && stTakeStatus != 2 ){
//             alert('任职状态不能为空');
//             return false;
//         }

//         /*保存提交的表单内容，用于刷新页面保持*/
//         $.cookie('stJobNumber',stJobNumber);
//         $.cookie('stName',stJobNumber);
//         $.cookie('stCampus',stCampus);
//         $.cookie('stSection',stSection);
//         $.cookie('stDepartments',stDepartments);
//         $.cookie('stPost',stPost);
//         $.cookie('stJob',stJob);
//         $.cookie('stPersonnelStatus',stPersonnelStatus);
//         $.cookie('stEntryTime',stEntryTime);
//         $.cookie('stSex',stSex);
//         $.cookie('stIdentity',stIdentity);
//         $.cookie('stPoliticsStatus',stPoliticsStatus);
//         $.cookie('stMaritalStatus',stMaritalStatus);
//         $.cookie('stNation',stNation);
//         $.cookie('stEducation',stEducation);
//         $.cookie('stGraduationDate',stGraduationDate);
//         $.cookie('stSchoolTag',stSchoolTag);
//         $.cookie('stSeniority',stSeniority);
//         $.cookie('stPhone',stPhone);
//         $.cookie('stMajob',stMajob);
//         $.cookie('stEmergencyPhone',stEmergencyPhone);
//         $.cookie('stNativePlace',stNativePlace);
//         $.cookie('stIdentityPlace',stIdentityPlace);
//         $.cookie('stResidence',stResidence);
//         $.cookie('stHeight',stHeight);
//         $.cookie('stWeight',stWeight);
//         $.cookie('stForeignLanguageLevel',stForeignLanguageLevel);
//         $.cookie('stForeignType',stForeignType);
//         $.cookie('stTeacherCard',stTeacherCard);
//         $.cookie('stTakeStatus',stTakeStatus);
//         $.cookie('stPactBegin',stPactBegin);
//         $.cookie('stPactFinish',stPactFinish);
//         $.cookie('stName',stJobNumber);   
// }


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
<script src="/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/Public/Admin/bootstrap/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/Public/Admin/bootstrap/js/raphael-min.js"></script>
<script src="/Public/Admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/Public/Admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/Public/Admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="/Public/Admin/bootstrap/js/moment.min.js"></script>
<script src="/Public/Admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/Public/Admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/Public/Admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/Public/Admin/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="/Public/Admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/Public/Admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/Admin/dist/js/demo.js"></script>
<script type="text/javascript">
    if($('.aStatus').text()==0){
        $(".add").css("display","block");
    }else{
        $(".add").css("display","none");
    }
</script>
</body>
</html>