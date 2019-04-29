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
                
<link href="/Public/Css/mypage.css" rel="stylesheet" type="text/css"/>
员工列表

                
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
        
<script src="/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/Admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/Public/Admin/static/plupload/upfiless.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <div class="col-md-9">
        <div class="box box-primary" style="width:1100px;">
            <div class="box-header with-border">
                <a href="<?php echo U('Admin/User/add');?>" class="box-title" style="color:#3C8DBC">添加</a>
                <a href="<?php echo U('Admin/User/download');?>" class="box-title">下载</a>
                <div class="box-tools pull-right">
                    <div class="has-feedback">
                        <form action="/index.php/Admin/User/list" method="GET">
                            <input type="text" name="stName" id="search_box" placeholder="Search Mail" value="<?php echo I('get.search'); ?>" />
                            <input type="submit" value="搜索" style="background-color:#3C8DBC;">
                        </form>
                    </div>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped" style="border 1px solid #ccc;">
                        <thead>
                            <tr>
                                <th class="text"></th>
                                <th class="text dropdown hidden-xs">序号</th>
                                <th class="text">工号</th>
                                <th class="text">姓名</th>
                                <th class="text">校区</th>
                                <th class="text">所属部门</th>
                                <th class="text">所属科室</th>
                                <th class="text">所属岗位</th>
                                <th class="text">职位</th>
                                <th class="text">入职时间</th>
                                <th class="text">性别</th>
                                <th class="text" style="display:none">身份证号</th>
                                <th class="text">出生日期</th>
                                <th class="text">年龄</th>
                                <th class="text">学历</th>
                                <th class="text">电话</th>
                                <th class="text">所学专业</th>
                                <th class="text">任职状态</th>
                                <th class="text" id="caozuo">操作</th>
                                <th style="display:none">人员<br>状态</th>
                                <th style="display:none">政治面貌</th>
                                <th style="display:none">婚姻</th>
                                <th style="display:none">民族</th>
                                <th style="display:none">毕业日期</th>
                                <th style="display:none">毕业学校</th>
                                <th style="display:none">工龄</th>
                                <th style="display:none">紧急电话</th>
                                <th style="display:none">籍贯</th>
                                <th style="display:none">身份证地址</th>
                                <th style="display:none">现居地</th>
                                <th style="display:none">身高</th>
                                <th style="display:none">体重</th>
                                <th style="display:none">外语水平</th>
                                <th style="display:none">外语种</th>
                                <th style="display:none">是否有资格证</th>
                                <th style="display:none">合同起始日期</th>
                                <th style="display:none">合同结束日期</th>
                                <th style="display:none">照片</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($rs_staffLists)): foreach($rs_staffLists as $key=>$val_staffLists): ?><tr class="text-c">
                                    <td><input type="checkbox" id="node" name="node[]" value="<?php echo ($val_staffLists["stId"]); ?>"/></td> 
                                    <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stId"]); ?></td>
                                    <td><?php echo ($val_staffLists["stJobNumber"]); ?></td>
                                    <td><a href="<?php echo U('Admin/User/detail',array('id'=>$val_staffLists['stId']));?>"><?php echo ($val_staffLists["stName"]); ?></a></td>             
                                    <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stCampus"]); ?></td>        
                                    <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stSection"]); ?></td>
                                    <td class="dropdown hidden-xs"><?php echo ($val_staffLists["stDepartments"]); ?></td> 
                                    <td><?php echo ($val_staffLists["stPost"]); ?></td>
                                    <td><?php echo ($val_staffLists["stJob"]); ?></td>
                                    <td><?php echo ($val_staffLists["stEntryTime"]); ?></td>
                                    <?php if($val_staffLists["stSex"] == 1): ?><td>男</td>
                                    <?php else: ?>
                                    <td>女</td><?php endif; ?>
                                    <td style="display:none;"><?php echo ($val_staffLists["stIdentity"]); ?></td>
                                    <?php
 $a=substr($val_staffLists['stIdentity'],6,4); $b=substr($val_staffLists['stIdentity'],10,2); $c=substr($val_staffLists['stIdentity'],12,2); $stBirthDate=$a."-".$b."-".$c; ?>
                                    <td class="dropdown hidden-xs"><?php echo ($stBirthDate); ?></td>
                                    <?php $nowTime=time(); $stBirthDate=strtotime($stBirthDate); $stAge = round(((($nowTime-$stBirthDate)/86400)/365),0); ?>
                                    <td class="dropdown hidden-xs"><?php echo ($stAge); ?></td>
                                    <td><?php echo ($val_staffLists["stEducation"]); ?></td>
                                    <td><?php echo ($val_staffLists["stPhone"]); ?></td>
                                    <td><?php echo ($val_staffLists["stMajob"]); ?></td>
                                    <?php  if($val_staffLists['stTakeStatus'] == 0){ echo "<td>实习</td>"; }else if($val_staffLists['stTakeStatus'] == 1){ echo "<td>试用</td>"; }else{ echo "<td>转正</td>"; } ?>
                                    <th class="td-manage dropdown hidden-xs">
                                    <!--<a title="放入回收站" href="#"><i class="glyphicon glyphicon-minus" style="margin-right: 10px;"></i></a>-->
                                    
                                    <a title="编辑员工资料" href="<?php echo U('Admin/User/edit',array('id'=>$val_staffLists['stId']));?>"><i class="glyphicon glyphicon-pencil" style="margin-right: 10px;"></i></a>
                                    
                                    <a title="删除" href="<?php echo U('Admin/User/delete',array('id'=>$val_staffLists['stId']));?>" ><i class="glyphicon glyphicon-remove"></i></a>
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
    <script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/Public/Admin/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="/Public/Admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/Public/Admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/Public/Admin/js/content.min.js?v=1.0.0"></script>
    <script>
        $(document).ready(function(){$(".dataTables-example").dataTable();var oTable=$("#editable").dataTable();oTable.$("td").editable("../example_ajax.php",{"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);oTable.fnUpdate(sValue,aPos[0],aPos[1])},"submitdata":function(value,settings){return{"row_id":this.parentNode.getAttribute("id"),"column":oTable.fnGetPosition(this)[2]}},"width":"90%","height":"100%"})});function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};
    </script>
    <script type="text/javascript">
        $(document).ready(function(){  
       $(".show_message").hide();  
       var $search=$('#search_box');  
       $("#submit_from").click(function(){  
        if($("#search_box").attr("value")=='')  
        {  
            //alert('请输入文字!');  
            $(".show_message").html('错误提示：搜索框文本不能为空！');  
            $(".show_message").fadeIn(1000);  
            $(".show_message").fadeOut(1000);  
            $search.focus();  
            //return false;  
        }else{  
            //开始ajax执行数据  
            $.ajax({  
                type: "POST",  
                url:"/index.php/Goods/search",  
                data:{  
                    search:$search.val()  
                },  
                dataType: "json",  
                success: function (data) {  
        if (data.status == 1) {  
                //alert(data.info);  
                var html='';  
                        $.each(data.data,function(no,items){      
                        html+='';  
                        });  
                        html+="  
    '+items.goods_id+' '+items.goods_name+' '+items.add_time+' '+items.brand+' '+items.price+'";      
                         $(".goods-list").html(' ').html(html);  
                       // alert(html);  
        }  
        else if (data.status == 0) {  
            $(".show_message").show();  
            $(".show_message").html(data.info);  
                        $(".show_message").fadeOut(3000);  
        //    alert(data.info);  
              return false;  
            }  
          }  
             });  
        }  
      });  
    });
    </script>

    <script type="text/javascript">
    if($('.aStatus').text()==0){
        $(".td-manage").css('display','block');
        $("#caozuo").css('display','block');
        $(".add").css("display","block");
    }else{
        $(".td-manage").css('display','none');
        $("#caozuo").css('display','none');
        $(".add").css("display","none");
    }

    function Check(){
        alert(111);return false;
        $("input:checkbox").attr('checked',true);
    } 




    $(function () { 
    $("#chkAll").click(function () { 
    var stu = $(this).attr("checked"); 
    chkAll(stu); 
    }) 
    $("input[name='node[]']").click(function () { 
    uncheckAll(); 
    }) 
    }) 
    function chkAll(status) { 
    $("input[name='checkbox']").each(function () { 
    $(this).attr("checked"); 
    $(this).attr("checked", status); 
    }) 
    } 

    function chkAll() { 
    alert($("input[name='checkbox']:checked").length); 
    if ($("input[name='checkbox']:checked").length == $("input[name='checkbox']").length) { 
    $("#checkall").attr("checked",true); 
    } 








     $('#chkAll').on('click',function(){
            //判断
            if($(this).html()=='全选'){
                alert(222);
            }
            // switch ($(this).html()) {
            //     case '全选':
            //         $('input:checkbox').attr('checked',true);
            //         break;
            //     case '全不选':
            //         $('input:checkbox').attr('checked',false);
            //         break;
            //     case '反选':
            //         //先获取一下选中的。
            //         var list = $('input:checked');
            //         console.log(list);
            //         //把所有的全部设置成选中。
            //         $('input:checkbox').attr('checked',true);
            //         //将选中的设置成不选中
            //         list.attr('checked',false);
            //         break;
            // }
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