<head>
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row" style="background-color:#fff">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="panel-body">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form class="form-horizontal m-t">
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">品牌名称：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="brand_name" id="brand_name"
                                           class="form-control"
                                           placeholder="请输入品牌名称" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">品牌网址：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="website_url" id="website_url" class="form-control"
                                           placeholder="请输入品牌网址" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">品牌logo：</label>

                                <div class="col-sm-9">
                                    <input type="file" name="brand_logo" id="brand_logo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">品牌描述：</label>

                                <div class="col-sm-9">
                                    <textarea class="form-control" name="brand_desc" id="brand_desc">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">排序：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="sort_order" id="sort_order" class="form-control"
                                           required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button class="btn btn-primary" type="button" onclick="add_product_brand()">
                                        添加品牌
                                    </button>
                                    <button class="btn btn-white" type="button">取消</button>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<script>
    function add_product_brand() {
        var brand_name = document.getElementById('brand_name').value;
        var website_url = document.getElementById('website_url').value;
        var brand_logo = document.getElementById('brand_logo').value;
        var brand_desc = document.getElementById('brand_desc').value;
        var sort_order = document.getElementById('sort_order').value;
        url = '<?php echo base_url(); ?>index.php/product/addGoodsBrand';
        var data = {
            brand_name: brand_name,
            website_url: website_url,
            brand_logo: brand_logo,
            brand_desc: brand_desc,
            sort_order: sort_order
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('添加成功');
                window.location.href = '<?php echo base_url()?>index.php/product/brand'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>

</body>