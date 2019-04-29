<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>员工列表</title>

    <link rel="shortcut icon" href="favicon.ico"> <link href="/renshi/Public/Admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/renshi/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/renshi/Public/Admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/renshi/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/renshi/Public/Admin/css/style.min.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg" style="overflow-x:scroll;width:1200px;white-space:nowrap;">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>员工列表 <a href="/renshi/index.php/Admin/User/add" style="margin-left:15px; color:#06cbc4">添加员工</a></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <form method="post" action="/renshi/index.php/Admin/User/DelAll" class="form-horizontal" id="form-admin-add">
                    <script type="text/javascript">
                    function CheckAll(val) {
                        $("input[name='node[]']").each(function() {
                            this.checked = val;
                        });
                    }
                    </script>


                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover dataTables-example">

                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="dropdown hidden-xs">ID</th>
                                    <th >工号</th>
                                    <th >姓名</th>
                                    <th >校区</th>
                                    <th >所属部门</th>
                                    <th >所属科室</th>
                                    <th >所属岗位</th>
                                    <th >职位</th>
                                    <th >人员状态</th>
                                    <th >入职时间</th>
                                    <th >性别</th>
                                    <th >出生日期</th>
                                    <th >身份证号</th>
                                    <th >政治面貌</th>
                                    <th >婚姻</th>
                                    <th >民族</th>
                                    <th >学历</th>
                                    <th >毕业日期</th>
                                    <th >毕业学校</th>
                                    <th >工龄</th>
                                    <th >电话</th>
                                    <th >所学专业</th>
                                    <th >紧急电话</th>
                                    <th >籍贯</th>
                                    <th >身份证地址</th>
                                    <th >现居地</th>
                                    <th >身高</th>
                                    <th >体重</th>
                                    <th >外语水平</th>
                                    <th >外语种</th>
                                    <th >是否有资格证</th>
                                    <th >合同起始日期</th>
                                    <th >合同结束日期</th>
                                    <th >照片</th>
                                    <th >操作</th>
                                </tr>
                            </thead>
                           
                             
                            <tbody>
                            <?php
 ?>
                           
                           
                            <?php if(is_array($lizhi)): foreach($lizhi as $key=>$val_lizhi): ?><tr class="text-c">
                                    <td><input type="checkbox" name="node[]" value="<?php echo ($val_staffLists["stId"]); ?>"/></td> 
                                    
                                    <td class="dropdown hidden-xs"><?php echo ($val_lizhi["stId"]); ?></td>
                                    <td><?php echo ($val_lizhi["stJobNumber"]); ?></td>
                                    <td><a href="/renshi/index.php/Admin/User/show/stId/<?php echo ($val_staffLists["stId"]); ?>"><?php echo ($val_lizhi["stName"]); ?></a></td>
                                      
                                    <td class="dropdown hidden-xs"><?php echo ($val_lizhi["stCampus"]); ?></td>
                                    
                                    <td class="dropdown hidden-xs"><?php echo ($val_lizhi["stSection"]); ?></td>
                                    <td class="dropdown hidden-xs"><?php echo ($val_lizhi["stDepartments"]); ?></td>
                                    
                                    
                                    <td><?php echo ($val_staffLists["stPost"]); ?></td>
                                    <td><?php echo ($val_staffLists["stJob"]); ?></td>
                                    <td><?php echo ($val_staffLists["stPersonnelStatus"]); ?></td>
                                    
                                    <td><?php echo ($val_staffLists["stEntryTime"]); ?></td>
                                    <?php if($val_staffLists["stSex"] == 1): ?><td>男</td>
                                    <?php else: ?>
                                    <td>女</td><?php endif; ?>
                                    <td><?php echo ($val_staffLists["stBirthDate"]); ?></td>
                                    <td><?php echo ($val_staffLists["stIdentity"]); ?></td>
                                    <td><?php echo ($val_staffLists["stPoliticsStatus"]); ?></td>
                                    <td><?php echo ($val_staffLists["stMaritalStatus"]); ?></td>
                                    
                                    <td><?php echo ($val_staffLists["stNation"]); ?></td>
                                    <td><?php echo ($val_staffLists["stEducation"]); ?></td>
                                    
                                    <td><?php echo ($val_staffLists["stGraduationDate"]); ?></td>
                                    <td><?php echo ($val_staffLists["stSchoolTag"]); ?></td>

                                    <?php $nowTime=time(); $stEntryTime=strtotime($val_staffLists["stEntryTime"]); $quiteYear=strtotime($val_staffLists["stDepartureTime"]); if($quiteYear!=0){ $nowWorkingYear=round(((($quiteYear-$stEntryTime)/86400)/365),1); }else{ $nowWorkingYear=round(((($nowTime-$stEntryTime)/86400)/365),1); } ?>
                                    <td class="dropdown hidden-xs"><?php echo ($nowWorkingYear); ?> 年</td>

                                    <td><?php echo ($val_staffLists["stPhone"]); ?></td>
                                    <td><?php echo ($val_staffLists["stMajob"]); ?></td>
                                    <td><?php echo ($val_staffLists["stEmergencyPhone"]); ?></td>
                                    <td><?php echo ($val_staffLists["stNativePlace"]); ?></td>
                                    <td><?php echo ($val_staffLists["stIdentityPlace"]); ?></td>

                                   
                                    <td><?php echo ($val_staffLists["stResidence"]); ?></td>
                                    <td><?php echo ($val_staffLists["stHeight"]); ?></td>
                                    <td><?php echo ($val_staffLists["stWeight"]); ?></td>
                                    <td><?php echo ($val_staffLists["stForeignLanguageLevel"]); ?></td>
                                    <td><?php echo ($val_staffLists["stForeignType"]); ?></td>
                                    <td><?php echo ($val_staffLists["stTeacherCard"]); ?></td>
                                    
                                    
                                    
                                    
                                   
                                    <td><?php echo ($val_staffLists["stPactBegin"]); ?></td>
                                    <td><?php echo ($val_staffLists["stPactFinish"]); ?></td>
                                    <td><img src="<?php echo ($val_staffLists["stPhoto"]); ?>"></td>

                                    
                                    
                                    <td class="td-manage dropdown hidden-xs">
                                    <a title="设置离职员工" href="<?php echo U('Admin/User/dimission',array('id'=>$val_staffLists['stId']));?>/"><i class="glyphicon glyphicon-minus" style="margin-right: 10px;"></i></a>
                                    
                                    <a title="编辑员工资料" href="<?php echo U('Admin/User/edit',array('id'=>$val_staffLists['stId']));?>"><i class="glyphicon glyphicon-pencil" style="margin-right: 10px;"></i></a>
                                    
                                    <a title="删除" href="<?php echo U('Admin/User/delete',array('id'=>$val_staffLists['stId']));?>" ><i class="glyphicon glyphicon-remove"></i></a>
                                    
                                    </td>
                                </tr><?php endforeach; endif; ?>
                           
                           
                            </tbody>
                            
                        </table>
                        <input type='checkbox' id='chkAll' onclick="CheckAll(this.checked)"> <span style="margin-right: 10px;color: #2c86da; font-size: 12px; font-weight: bold">全 选</span>
                        <input class="btn btn-success btn-xs" type="submit" value="删除" >
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/renshi/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/renshi/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/renshi/Public/Admin/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="/renshi/Public/Admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/renshi/Public/Admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/renshi/Public/Admin/js/content.min.js?v=1.0.0"></script>
    <script>
        $(document).ready(function(){$(".dataTables-example").dataTable();var oTable=$("#editable").dataTable();oTable.$("td").editable("../example_ajax.php",{"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);oTable.fnUpdate(sValue,aPos[0],aPos[1])},"submitdata":function(value,settings){return{"row_id":this.parentNode.getAttribute("id"),"column":oTable.fnGetPosition(this)[2]}},"width":"90%","height":"100%"})});function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};
    </script>
</body>

</html>