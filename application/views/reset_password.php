<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <form class="form-horizontal m-t">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">原密码：</label>

                            <div class="col-sm-8">
                                <input type="password" minlength="2" id="old_password" class="form-control" required=""
                                       aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">新密码：</label>

                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                       required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">确认密码：</label>

                            <div class="col-sm-8">
                                <input type="password" id="new_password_again" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <button class="btn btn-primary" type="button" onclick="resetPassword()">确认修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/validate/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/validate/messages_zh.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/demo/form-validate-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script>
    function resetPassword() {
        var old_password = document.getElementById('old_password').value;
        var new_password = document.getElementById('new_password').value;
        var new_password_again = document.getElementById('new_password_again').value;
        if (old_password == '') {
            alert('原密码不能为空！');
            return false;
        }
        if (new_password == '') {
            alert('新密码不能为空');
            return false;
        }
        if (new_password_again == '') {
            alert('请输入确认密码');
            return false;
        }
        if (new_password != new_password_again) {
            alert('两次输入密码不一致！');
            return false;
        }
        var data = {
            old_password: old_password,
            new_password: new_password,
            new_password_again: new_password_again
        };
        var url = "<?php echo base_url();?>index.php/welcome/changePassword";
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('密码修改成功');
                window.location.href = '<?php echo base_url();?>index.php'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }

</script>
</html>