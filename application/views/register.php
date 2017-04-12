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
                <input type="email" id="email" class="form-control" placeholder="请输入邮箱" required="">
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


</script>