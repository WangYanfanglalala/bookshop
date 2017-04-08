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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <h3><strong>订单列表</strong></h3>
                        <thead>
                        <tr>
                            <th>订单号</th>
                            <th>下单时间</th>
                            <th>收货人</th>
                            <th>总金额</th>
                            <th>应付金额</th>
                            <th>订单状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($order as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->order_id ?></td>
                                <td><?php echo $item->create_time ?></td>
                                <td><?php echo $item->receive_man ?></td>
                                <td><?php echo $item->money_total ?></td>
                                <td><?php echo $item->money_paid ?></td>
                                <td><?php echo $item->order_status . ' ' . $item->shipping_status . ' ' . $item->pay_status ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <h3><strong>收货地址列表</strong></h3>
                        <thead>
                        <tr>
                            <th>收货人</th>
                            <th>收货地址</th>
                            <th>联系方式</th>
                            <th>其他</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($address as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->consignee ?></td>
                                <td>
                                    <p><?php echo $item->country . ' ' . $item->province . ' ' . $item->city . ' ' . $item->district ?></p>

                                    <p><?php echo $item->address ?></p>
                                </td>
                                <td>
                                    <p><?php echo $item->tel ?></p>

                                    <p><?php echo $item->mobile ?></p>

                                    <p><?php echo $item->email ?></p>
                                </td>
                                <td>
                                    <p>标志性建筑物：<?php echo $item->sign_building ?></p>

                                    <p>最佳送货时间：<?php echo $item->best_time ?></p>
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