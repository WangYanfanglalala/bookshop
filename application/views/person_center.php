<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>登录地址</th>
                            <th>登录ip</th>
                            <th>登录时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($admin_log as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->loginLog_id ?></td>
                                <td><?php echo $item->loginLog_address ?></td>
                                <td><?php echo $item->loginLog_IP ?></td>
                                <td><?php echo $item->loginLog_time ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="ibox ">

                <div class="ibox-content">
                    <div class="tab-content">
                        <div id="contact-1" class="tab-pane active">
                            <div class="row m-b-lg">
                                <div class="col-lg-4 text-center">
                                    <h2><?php echo $admin_info["username"] ?></h2>
                                </div>
                            </div>
                            <div class="client-detail">
                                <div class="full-height-scroll">

                                    <strong>个人信息</strong>

                                    <ul class="list-group clear-list">
                                        <li class="list-group-item fist-item">
                                            <span class="pull-right"><?php echo $admin_info["username"] ?></span> 用户名
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"><?php echo $admin_info["name"] ?></span>姓名
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"><?php echo $admin_info["email"] ?> </span>邮件地址
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"><?php echo $admin_info["phone"] ?></span>电话号码
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"><?php echo $admin_info["sex"] ?></span>性别
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"><?php echo $admin_info["add_time"] ?></span>注册时间
                                        </li>
                                    </ul>
                                    <hr/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script>
    $(function () {
        $(".full-height-scroll").slimScroll({height: "100%"})
    });
</script>
<script>
    $(document).ready(function () {
        $(".dataTables-example").dataTable();
        var oTable = $("#editable").dataTable();
        oTable.$("td").editable("../example_ajax.php", {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1])
            }, "submitdata": function (value, settings) {
                return {"row_id": this.parentNode.getAttribute("id"), "column": oTable.fnGetPosition(this)[2]}
            }, "width": "90%", "height": "100%"
        })
    });
    function fnClickAddRow() {
        $("#editable").dataTable().fnAddData(["Custom row", "New row", "New row", "New row", "New row"])
    }
    ;
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>