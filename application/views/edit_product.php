<head>
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row" style="background-color:#fff">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> 商品基本信息</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">商品详细信息</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <form class="form-horizontal m-t">
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品名称：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_name" id="goods_name"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["goods_name"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品分类</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="goods_type" id="goods_type">
                                                    <option>请选择</option>
                                                    <?php
                                                    foreach ($goods_type as $item) {
                                                        ?>
                                                        <option><?php echo $item->type_name ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品品牌</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="goods_brand" id="goods_brand">
                                                    <option>请选择</option>
                                                    <?php
                                                    foreach ($goods_brand as $item) {
                                                        ?>
                                                        <option><?php echo $item->brand_name ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">市场价格：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="market_price" id="market_price"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["market_price"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">本店价格：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="shop_price" id="shop_price"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["shop_price"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">库存：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="stock" id="stock"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["stock"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">赠送消费积分数：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="add_point" id="add_point" class="form-control"
                                                       value="<?php echo $goods_info["add_point"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">积分购买金额：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="consume_point" id="consume_point"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["consume_point"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">上传商品图片：</label>

                                            <div class="col-sm-9">
                                                <input type="file" name="goods_img" id="goods_img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group draggable" id="data_1">
                                            <label class="col-sm-3 control-label">上架时间：</label>

                                            <div class="input-group date col-sm-9">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" name="sale_date" id="sale_date"
                                                       value="<?php echo substr($goods_info["sale_date"], 0, 10) ?>">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <form class="form-horizontal m-t">
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品长度：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_length" id="goods_length"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["goods_length"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品宽度：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_width" id="goods_width"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["goods_width"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品高度：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_height" id="goods_height"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["goods_height"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品重量：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_weight" id="goods_weight"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["goods_weight"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品简单描述：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_brief" id="goods_brief"
                                                       class="form-control"
                                                       value="<?php echo $goods_info["goods_brief"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品详细描述：</label>

                                            <div class="col-sm-9">
                                                <textarea name="goods_desc" id="goods_desc" class="form-control"
                                                          style="height: 200px"><?php echo $goods_info["goods_desc"] ?>
                                                 </textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div style="height: 160px;padding-top: 40px;padding-bottom: 40px">
                <div class="col-sm-12 col-sm-offset-3">
                    <button class="btn btn-primary" type="button" onclick="edit_product()">
                        修改商品信息
                    </button>
                    <button class="btn btn-white" type="button">取消</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
<script type="text/javascript">
    function edit_product() {
        var goods_name = document.getElementById('goods_name').value;
        var goods_type = $("#goods_type option:selected").val();
        var goods_brand = $("#goods_brand option:selected").val();
        var market_price = document.getElementById('market_price').value;
        var shop_price = document.getElementById('shop_price').value;
        var stock = document.getElementById('stock').value;
        var add_point = document.getElementById('add_point').value;
        var consume_point = document.getElementById('consume_point').value;
        var goods_img = document.getElementById('goods_img').value;
        var sale_date = document.getElementById('sale_date').value;
        var goods_length = document.getElementById('goods_length').value;
        var goods_width = document.getElementById('goods_width').value;
        var goods_height = document.getElementById('goods_height').value;
        var goods_weight = document.getElementById('goods_weight').value;
        var goods_brief = document.getElementById('goods_brief').value;
        var goods_desc = document.getElementById('goods_desc').value;
        var data = {
            goods_id:<?php echo $goods_info["goods_id"]?>,
            goods_name: goods_name,
            goods_type: goods_type,
            goods_brand: goods_brand,
            market_price: market_price,
            stock: stock,
            shop_price: shop_price,
            add_point: add_point,
            consume_point: consume_point,
            goods_img: goods_img,
            sale_date: sale_date,
            goods_length: goods_length,
            goods_width: goods_width,
            goods_height: goods_height,
            goods_weight: goods_weight,
            goods_brief: goods_brief,
            goods_desc: goods_desc
        };
        var url = '<?php echo base_url()?>index.php/product/editProduct';
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('修改成功');
                console.log(rsps);
                window.location.href = '<?php echo base_url()?>index.php/product/goodslist'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
</html>