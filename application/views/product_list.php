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
                <div class="ibox-title">
                    <h5>搜索条件</h5>
                </div>
                <div class="ibox-content">
                    <p>
                        <label>商品名称：</label><input type="text" id="product_name_input">
                        <label>商品品牌：</label>
                        <select name="product_brand_input" id="product_brand_input" style="width: 100px">
                            <option value="0">请选择</option>
                            <?php
                            foreach ($goods_brand as $item) {
                                ?>
                                <option><?php echo $item->brand_name ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <label>商品类别：</label>
                        <select name="product_type_input" id="product_type_input" style="width: 100px">
                            <option value="0">请选择</option>
                            <?php
                            foreach ($goods_type as $item) {
                                ?>
                                <option><?php echo $item->type_name ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <label>商品价格：</label><input type="text" id="min_product_price_input">
                        <label>-</label><input type="text" id="max_product_price_input">
                        <button type="button" class="btn btn-w-m btn-primary" onclick="search_product()">
                            <i class=" fa fa-search"></i>搜索
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover dataTables-example"
                           id="goods_information" style="">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>商品名称</th>
                            <th>商品描述</th>
                            <th>所属类别</th>
                            <th>商品品牌</th>
                            <th>价格</th>
                            <th>库存</th>
                            <th>上架时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($goods_list as $item) {
                            ?>
                            <tr class="gradeX" id="goods_info">
                                <td><?php echo $item->goods_id ?></td>
                                <td><?php echo $item->goods_name ?></td>
                                <td><?php echo $item->goods_brief ?></td>
                                <td><?php echo $item->goods_type ?></td>
                                <td><?php echo $item->goods_brand ?></td>
                                <td class="center"><?php echo $item->shop_price ?></td>
                                <td><?php echo $item->stock ?></td>
                                <td class="center"><?php echo $item->sale_date ?></td>
                                <td>
                                    <button class="btn btn-warning "
                                            onclick="javascript:window.location.href = '<?php echo base_url(); ?>index.php/product/edit/<?php echo $item->goods_id ?>'"
                                            type="button"><i class="fa fa-paste"></i> 编辑
                                    </button>
                                    <button class="btn btn-danger " type="button"
                                            onclick="removeProduct(<?php echo $item->goods_id ?>)"><i
                                            class="fa fa-times"></i>
                                        <span class="bold">删除</span>
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
    function search_product() {
        var goods_search = {
            goods_name: document.getElementById('product_name_input').value ? document.getElementById('product_name_input').value : 0,
            min_price: document.getElementById('min_product_price_input').value ? document.getElementById('min_product_price_input').value : 0,
            max_price: document.getElementById('max_product_price_input').value ? document.getElementById('max_product_price_input').value : 0,
            goods_type: $("#product_type_input option:selected").val() ? $("#product_type_input option:selected").val() : 0,
            goods_brand: $("#product_brand_input option:selected").val() ? $("#product_brand_input option:selected").val() : 0
        };
        window.location.href = '<?php echo base_url(); ?>index.php/product/goodslist/' + goods_search.goods_name + "/"
            + goods_search.min_price + "/" + goods_search.max_price + "/" + goods_search.goods_type + "/" + goods_search.goods_brand;
    }
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
<script>
    function removeProduct(goods_id) {
        if (!confirm('你确定要删除吗?')) {
            return false;
        }
        var url = '<?php echo base_url(); ?>index.php/product/delete';
        var data = {
            goods_id: goods_id
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('删除成功');
                window.location.href = '<?php echo base_url()?>index.php/product/goodslist'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }

</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>

</html>