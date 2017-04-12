<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <!-- Data Tables -->
    <link href="<?php echo base_url(); ?>public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>管理员编号</th>
                            <th>登录名</th>
                            <th>手机</th>
                            <th>邮箱</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($admin as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->id ?></td>
                                <td><?php echo $item->username ?></td>
                                <td><?php echo $item->phone ?></td>
                                <td><?php echo $item->email ?></td>
                                <td><?php echo $item->add_time ?></td>
                                <td>
                                    <button class="btn btn-info " type="button"
                                            onclick="javasrcipt:window.location.href = '<?php echo base_url(); ?>index.php/welcome/adminlog/<?php echo $item->id ?>'">
                                        <i
                                            class="fa fa-search"></i>&nbsp;查看登录日志
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

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
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
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