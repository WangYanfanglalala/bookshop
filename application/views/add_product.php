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
                                                <input type="text" name="goods_name" id="goods_name" class="form-control"
                                                       placeholder="请输入商品名称">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品货号：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_sn" id="goods_sn" class="form-control"
                                                       placeholder="请输入商品货号">
                                                <span class="help-block m-b-none">如果您不输入商品货号，系统将会为您生成一个唯一的商品货号</span>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品分类</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="goods_type" id="goods_type">
                                                    <option>分类 1</option>
                                                    <option>分类 2</option>
                                                    <option>分类 3</option>
                                                    <option>分类 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品品牌</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="goods_brand" id="goods_brand">
                                                    <option>品牌 1</option>
                                                    <option>品牌 2</option>
                                                    <option>品牌 3</option>
                                                    <option>品牌 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">市场价格：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="market_price" id="market_price" class="form-control"
                                                       placeholder="请输入市场售价">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">本店价格：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="shop_price" id="shop_price" class="form-control"
                                                       placeholder="请输入本店售卖价格">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">促销价：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="promote_price" id="promote_price" class="form-control"
                                                       placeholder="请输入商品促销价">
                                            </div>
                                        </div>
                                        <div class="form-group draggable" id="data_5">
                                            <label class="col-sm-3 control-label">促销日期</label>

                                            <div class="input-daterange input-group col-sm-9" id="datepicker">
                                                <input type="text" class="input-sm form-control" name="start" id="promote_start_date"
                                                       value="2017-03-27"/>
                                                <span class="input-group-addon">到</span>
                                                <input type="text" class="input-sm form-control" name="end" id="promote_end_date"
                                                       value="2017-03-29"/>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">赠送消费积分数：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="add_point" id="add_point" class="form-control"
                                                       placeholder="赠送消费积分数">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">积分购买金额：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="consume_point" id="consume_point" class="form-control"
                                                       placeholder="积分可以抵扣的金额">
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
                                                       value="2017-03-27">
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group draggable">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <button class="btn btn-primary" type="button" onclick="add_product()">添加商品</button>
                                                <button class="btn btn-white" type="button">取消</button>
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
                                                <input type="text" name="goods_length" id="goods_length" class="form-control"
                                                       placeholder="请输入商品长度">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品宽度：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_width" id="goods_width" class="form-control"
                                                       placeholder="请输入商品宽度">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品重量：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_weight" id="goods_weight" class="form-control"
                                                       placeholder="请输入商品重量">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品简单描述：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_brief" id="goods_brief" class="form-control"
                                                       placeholder="请输入商品简单描述">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品详细描述：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_brief" id="goods_brief" class="form-control"
                                                       placeholder="请输入商品详细描述">
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group draggable">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <button class="btn btn-primary" type="button" onclick="add_product()">保存商品详细信息</button>
                                                <button class="btn btn-white" type="button">取消</button>
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
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
<script type="text/javascript">
    function add_product() {
        var goods_name = document.getElementById('goods_name').value;
        var goods_sn = document.getElementById('goods_sn').value;
        var goods_type = $("#goods_type option:selected").val();
        var goods_brand = $("#goods_brand option:selected").val();
        var market_price = document.getElementById('market_price').value;
        var shop_price = document.getElementById('shop_price').value;
        var promote_price = document.getElementById('promote_price').value;
        var promote_start_date = document.getElementById('promote_start_date').value;
        var promote_end_date = document.getElementById('promote_end_date').value;
        var add_point = document.getElementById('add_point').value;
        var consume_point = document.getElementById('consume_point').value;
        var goods_img = document.getElementById('goods_img').value;
        var sale_date = document.getElementById('sale_date').value;
        var data = {
            goods_name: goods_name,
            goods_sn: goods_sn,
            goods_type: goods_type,
            goods_brand: goods_brand,
            market_price: market_price,
            shop_price: shop_price,
            promote_price: promote_price,
            promote_start_date: promote_start_date,
            promote_end_date: promote_end_date,
            add_point: add_point,
            consume_point: consume_point,
            goods_img: goods_img,
            sale_date: sale_date
        };
        var url = '<?php echo base_url()?>index.php/product/addProduct';
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('添加成功')
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
</html>