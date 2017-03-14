<!DOCTYPE html>
<html>
<body class="gray-bg">

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">H+</h1>

        </div>
        <h3>欢迎注册王艳芳的书店</h3>

        <p>创建一个新账户</p>

        <form class="m-t" role="form">
            <div class="form-group">
                <input type="text" id="username" class="form-control" placeholder="请输入用户名" required="">
            </div>
            <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="请输入姓名" required="">
            </div>
            <div class="form-group">
                <input type="text" id="email" class="form-control" placeholder="请输入邮箱" required="">
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="请输入密码" required="">
            </div>
            <div class="form-group">
                <input type="password" id="passwordAgain" class="form-control" placeholder="请再次输入密码" required="">
            </div>
            <div class="form-group text-left">
                <div class="checkbox i-checks">
                    <label class="no-padding">
                        <input type="checkbox"><i></i> 我同意注册协议</label>
                </div>
            </div>
            <button type="button" class="btn btn-primary block full-width m-b" onclick="signup()">注 册</button>

            <p class="text-muted text-center">
                <small>已经有账户了？</small>
                <a href="<?php echo base_url(); ?>index.php/welcome/login">点此登录</a>
            </p>

        </form>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    function signup() {
        var username = document.getElementById("username").value;
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
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
        var url = 'http://localhost:81/bookshop/index.php/welcome/userRegister';
        var data = {
            username: username,
            name: name,
            password: password,
            email: email
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('注册成功');
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }

</script>