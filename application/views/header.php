<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>H+ 后台主题UI框架 - 主页</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <script src="http://localhost/bookshop/public/js/content.min.js?v=1.0.0"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/staps/jquery.steps.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/validate/messages_zh.min.js"></script>
    <link href="<?php echo base_url(); ?>public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/layer/layer.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/hplus.min.js?v=4.0.0"></script>
    <script src="<?php echo base_url(); ?>public/js/contabs.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/jsKnob/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/jasny/jasny-bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/prettyfile/bootstrap-prettyfile.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/nouslider/jquery.nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/switchery/switchery.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/clockpicker/clockpicker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/cropper/cropper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/demo/form-advanced-demo.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/summernote/summernote.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/summernote/summernote-zh-CN.js"></script>
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
            $("#nestable").nestable({group: 1}).on("change", updateOutput);
            $("#nestable2").nestable({group: 1}).on("change", updateOutput);
            updateOutput($("#nestable").data("output", $("#nestable-output")));
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
    <script>
        $(document).ready(function () {
            $(".summernote").summernote({lang: "zh-CN"})
        });
        var edit = function () {
            $("#eg").addClass("no-padding");
            $(".click2edit").summernote({lang: "zh-CN", focus: true})
        };
        var save = function () {
            $("#eg").removeClass("no-padding");
            var aHTML = $(".click2edit").code();
            $(".click2edit").destroy()
        };
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
        $(document).ready(function () {
            $(".i-checks").iCheck({checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green",})
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset", onStepChanging: function (event, currentIndex, newIndex) {
                    if (currentIndex > newIndex) {
                        return true
                    }
                    if (newIndex === 3 && Number($("#age").val()) < 18) {
                        return false
                    }
                    var form = $(this);
                    if (currentIndex < newIndex) {
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error")
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid()
                }, onStepChanged: function (event, currentIndex, priorIndex) {
                    if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                        $(this).steps("next")
                    }
                    if (currentIndex === 2 && priorIndex === 3) {
                        $(this).steps("previous")
                    }
                }, onFinishing: function (event, currentIndex) {
                    var form = $(this);
                    form.validate().settings.ignore = ":disabled";
                    return form.valid()
                }, onFinished: function (event, currentIndex) {
                    var form = $(this);
                    form.submit()
                }
            }).validate({
                errorPlacement: function (error, element) {
                    element.before(error)
                }, rules: {confirm: {equalTo: "#password"}}
            })
        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</head>