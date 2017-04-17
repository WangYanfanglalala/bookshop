<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo">
                    <a href="javascript:void(0)" onclick="send_email()" class="btn btn-primary btn-sm"
                       data-toggle="tooltip" data-placement="top" title="发送"><i class="fa fa-reply"></i>发送</a>
                    <a href="mailbox.html" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                       title="存为模板"><i class="fa fa-pencil"></i> 存为模板</a>
                </div>
                <h2>
                    写信
                </h2>
            </div>
            <div class="mail-box">


                <div class="mail-body">

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">发送到：</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="to_address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">主题：</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="" id="subject">
                            </div>
                        </div>
                    </form>

                </div>

                <div class="mail-text h-200" style="height: 400px">

                    <div class="summernote" id="html_body">

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/summernote/summernote.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/summernote/summernote-zh-CN.js"></script>
<script>
    $(document).ready(function () {
        $(".i-checks").iCheck({checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green",});
        $(".summernote").summernote({lang: "zh-CN"})
    });
    var edit = function () {
        $(".click2edit").summernote({focus: true})
    };
    var save = function () {
        var aHTML = $(".click2edit").code();
        $(".click2edit").destroy()
    };
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<script>
    function send_email() {
        var to_address = document.getElementById('to_address').value;
        var subject = document.getElementById('subject').value;
        var html_body = $('#html_body').html();
        var data = {
            to_address: to_address,
            subject: subject,
            html_body: html_body
        };
        alert(data.html_body);
        var url = '<?php echo base_url();?>index.php/mail/sendemail';
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('发送成功');
                alert(rsps.data);
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
</body>

</html>