<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h3><strong>订单基本信息</strong></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th class="text-nowrap">订单号</th>
                                <td><?php echo $order_detail["order_id"] ?></td>
                                <th class="text-nowrap">订单状态</th>
                                <td><?php echo $order_detail["order_status"] . ' ' . $order_detail["shipping_status"] . ' ' . $order_detail["pay_status"] ?></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">收货人</th>
                                <td><?php echo $order_detail["receive_man"] ?></td>
                                <th class="text-nowrap">下单时间</th>
                                <td><?php echo $order_detail["create_time"] ?></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">付款时间</th>
                                <td><?php echo $order_detail["pay_time"] ?></td>
                                <th class="text-nowrap">买家留言</th>
                                <td><?php echo $order_detail["customer_memo"] ?></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">发货时间</th>
                                <td><?php echo $order_detail["shipping_time"] ?></td>
                                <th class="text-nowrap">配送方式</th>
                                <td><?php echo $order_detail["shipping_name"] ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h3><strong>收货人信息</strong></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th class="text-nowrap">收货人</th>
                                <td><?php echo $order_detail["receive_man"] ?></td>
                                <th class="text-nowrap">电子邮件</th>
                                <td><?php echo $order_detail["email"] ?></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">地址</th>
                                <td><?php echo $order_detail["country"] . ' ' . $order_detail["province"] . ' ' . $order_detail["city"] . ' ' . $order_detail["distinct"] . ' ' . $order_detail["address"] ?></td>
                                <th class="text-nowrap">邮编</th>
                                <td><?php echo $order_detail["zipcode"] ?></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">电话</th>
                                <td><?php echo $order_detail["tel"] ?></td>
                                <th class="text-nowrap">手机</th>
                                <td><?php echo $order_detail["mobilephone"] ?></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">最佳送货时间</th>
                                <td><?php echo $order_detail["best_time"] ?></td>
                                <th class="text-nowrap">发货时间</th>
                                <td><?php echo $order_detail["shipping_time"] ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content p-xl">
                <div class="table-responsive m-t">
                    <table class="table invoice-table">
                        <thead>
                        <tr>
                            <th>清单</th>
                            <th>数量</th>
                            <th>单价</th>
                            <th>总价</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($order_product as $item) {
                            ?>
                            <tr>
                                <td>
                                    <div><strong><?php echo $item->goods_name ?></strong>
                                    </div>
                                </td>
                                <td><?php echo $item->goods_number ?></td>
                                <td>&yen;<?php echo $item->goods_price ?></td>
                                <td>&yen;<?php echo $item->goods_total_price ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /table-responsive -->

                <table class="table invoice-total">
                    <tbody>
                    <tr>
                        <td><strong>总价：</strong>
                        </td>
                        <td>&yen;<?php echo $order_detail["money_total"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>快递费：</strong>
                        </td>
                        <td>&yen;<?php echo $order_detail["shipping_fee"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>积分抵扣：</strong>
                        </td>
                        <td>&yen;<?php echo $order_detail["point_consume"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>总计</strong>
                        </td>
                        <td>&yen;<?php echo $order_detail["money_paid"] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/demo/peity-demo.min.js"></script>
<script>
    $(document).ready(function () {
        $(".i-checks").iCheck({checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green",})
    });
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>

</html>