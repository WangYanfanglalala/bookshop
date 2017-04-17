<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <!-- Data Tables -->
    <link href="<?php echo base_url(); ?>public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/jsTree/style.min.css" rel="stylesheet">
    <base target="_blank">
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-info " type="button" style="padding-right: 10%"
                    onclick="javascript:window.location.href = '<?php echo base_url(); ?>index.php/product/addGoodsType'"><i
                    class="fa fa-plus"></i>&nbsp;增加分类
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>分类树形图
                    </h5>
                </div>
                <div class="ibox-content">

                    <div id="jstree1">
                        <ul>
                            <li class="jstree-open">顶级分类
                                <ul>
                                    <?php
                                    foreach ($goods_type_tree as $item) {
                                        ?>
                                        <li><?php echo $item->type_name ?>
                                            <ul>
                                                <?php
                                                foreach ($item->sub_type as $row) {
                                                    ?>
                                                    <li data-jstree='{"type":"css"}'><?php echo $row->type_name; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="ibox float-e-margins">
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>分类编号</th>
                            <th>分类名称</th>
                            <th>分类描述</th>
                            <th>所属分类</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($goods_type as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->id ?></td>
                                <td><?php echo $item->type_name ?></td>
                                <td><?php echo $item->describe ?></td>
                                <td class="center"><?php echo $item->parent_name ?></td>
                                <td>
                                    <button class="btn btn-warning "
                                            onclick="javascript:window.location.href = '<?php echo base_url(); ?>index.php/product/editType/<?php echo $item->id ?>'"
                                            type="button"><i class="fa fa-paste"></i> 编辑
                                    </button>
                                    <button class="btn btn-danger " type="button"
                                            onclick="removeGoodsType(<?php echo $item->id?>)">
                                        <i
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
<script src="<?php echo base_url(); ?>public/js/plugins/jsTree/jstree.min.js"></script>
<style>
    .jstree-open > .jstree-anchor > .fa-folder:before {
        content: "\f07c"
    }

    .jstree-default .jstree-icon.none {
        width: 0
    }
</style>
<script>
    $(document).ready(function () {
        $("#jstree1").jstree({
            "core": {"check_callback": true},
            "plugins": ["types", "dnd"],
            "types": {
                "default": {"icon": "fa fa-folder"},
                "html": {"icon": "fa fa-file-code-o"},
                "svg": {"icon": "fa fa-file-picture-o"},
                "css": {"icon": "fa fa-file-code-o"},
                "img": {"icon": "fa fa-file-image-o"},
                "js": {"icon": "fa fa-file-text-o"}
            }
        });
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
    function removeGoodsType(type_id) {
        if(!confirm('你确定要删除吗?')){
            return false;
        }
        var url = '<?php echo base_url(); ?>index.php/product/deleteType';
        var data = {
            type_id: type_id
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('删除成功');
                window.location.href = '<?php echo base_url()?>index.php/product/type'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>

</html>