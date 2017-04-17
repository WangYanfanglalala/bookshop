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
                                <label class="col-sm-3 control-label">分类名称：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="type_name" id="type_name"
                                           class="form-control"
                                           value="<?php echo $type_info["type_name"] ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">分类描述：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="describe" id="describe" class="form-control"
                                           value="<?php echo $type_info["describe"] ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">上级分类</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option value="<?php echo $type_info["parent_id"] ?>"
                                                selected="selected"><?php echo $type_info["parent_name"] ?></option>
                                        <?php
                                        foreach ($goods_type as $item) {
                                            ?>
                                            <option
                                                value="<?php echo $item->id ?>"><?php echo $item->type_name ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button class="btn btn-primary" type="button" onclick="edit_product_type()">
                                        修改分类
                                    </button>
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
    function edit_product_type() {
        var type_name = document.getElementById('type_name').value;
        var describe = document.getElementById('describe').value;
        var parent_id = document.getElementById('parent_id').value;
        if (type_name == '') {
            alert('分类名称不能为空');
            return false;
        }
        if (describe == '') {
            alert('分类描述不能为空');
            return false;
        }
        if (parent_id == -1) {
            alert('上级分类不能为空');
            return false;
        }
        url = '<?php echo base_url(); ?>index.php/product/editGoodsType';
        var data = {
            type_id:<?php echo $type_info["id"]?>,
            type_name: type_name,
            describe: describe,
            parent_id: parent_id
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('修改成功');
                window.location.href = '<?php echo base_url()?>index.php/product/type'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>

</body>