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
                                <label class="col-sm-3 control-label">用户名：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="username" id="username"
                                           class="form-control"
                                           placeholder="请输入会员名称" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">真实姓名：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="真实姓名" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">性别：</label>

                                <div class="col-sm-9" id="userSex">
                                    <input type="radio" name="sex" value="0" checked="">&nbsp;保密&nbsp;
                                    <input type="radio" name="sex" value="1">&nbsp;男&nbsp;
                                    <input type="radio" name="sex" value="2">&nbsp;女&nbsp;
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">手机号：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="phone" id="phone"
                                           class="form-control"
                                           placeholder="请输入手机号" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">邮箱：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="请输入邮箱" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">登录密码：</label>

                                <div class="col-sm-9">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="登录密码" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">确认登录密码：</label>

                                <div class="col-sm-9">
                                    <input type="password" name="passwordAgain" id="passwordAgain" class="form-control"
                                           placeholder="确认登录密码" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button class="btn btn-primary" type="button" onclick="add_admin()">
                                        添加管理员
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
    function signup() {
        var username = document.getElementById("username").value;
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById('phone').value;
        var sex = $('#userSex input[name="sex"]:checked ').val();
        var password = document.getElementById("password").value;
        var passwordAgain = document.getElementById("passwordAgain").value;
        var emailReg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
        if (!emailReg.test(email)) {
            alert('邮箱格式不正确，请重新输入');
            document.getElementById("email").focus();
            return false;
        }
        if (password != passwordAgain) {
            alert('两次密码输入不一致');
            document.getElementById("password").focus();
            return false;
        }
        var url = '<?php echo base_url(); ?>index.php/welcome/userRegister';
        var data = {
            username: username,
            name: name,
            password: password,
            email: email,
            phone: phone,
            sex: sex
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('管理员添加成功');
                window.location.href = '<?php echo base_url()?>index.php/welcome/login'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
</body>