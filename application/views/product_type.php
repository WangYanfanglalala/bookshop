<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="ibox ">
                <div class="ibox-content">
                    <ol class="dd-list">
                        <div class="dd" id="nestable2">
                            <?php
                            foreach ($goods_type as $item) {
                                ?>
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                    <span class="label label-info"><i
                                            class="fa fa-users"></i></span><?php echo $item->type_name ?>
                                    </div>
                                    <?php
                                    if (count($item->sub_type)) {
                                        ?>
                                        <ol class="dd-list">
                                            <?php
                                            foreach ($item->sub_type as $sub_item) {
                                                ?>
                                                <li class="dd-item" data-id="2">
                                                    <div class="dd-handle">
                                                        <span class="pull-right"> 12:00 </span>
                                                <span class="label label-info"><i
                                                        class="fa fa-cog"></i></span><?php echo $sub_item->type_name ?>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ol>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/nestable/jquery.nestable.js"></script>
<script>
    $(document).ready(function () {
        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target), output = list.data("output");
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable("serialize")))
            } else {
                output.val("浏览器不支持")
            }
        };
        $("#nestable2").nestable({group: 1}).on("change", updateOutput);
        updateOutput($("#nestable2").data("output", $("#nestable2-output")));
        $("#nestable-menu").on("click", function (e) {
            var target = $(e.target), action = target.data("action");
            if (action === "expand-all") {
                $(".dd").nestable("expandAll")
            }
            if (action === "collapse-all") {
                $(".dd").nestable("collapseAll")
            }
        })
    });
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>