<!DOCTYPE html>
<html>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">H+</h1>

        </div>
        <h3>欢迎使用 H+</h3>

        <form class="m-t" role="form">
            <div class="form-group">
                <input type="text" id="username" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="button" class="btn btn-primary block full-width m-b" onclick="signin()">登 录</button>


            <p class="text-muted text-center"><a href="#">
                    <small>忘记密码了？</small>
                </a> | <a href="<?php echo base_url(); ?>/index.php/welcome/signup">注册一个新账号</a>
            </p>

        </form>
    </div>
</div>
</body>

</html>
<script type="text/javascript">
    function signin() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var url = '<?php echo base_url(); ?>index.php/welcome/userLogin';
        var data = {
            username: username,
            password: password
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                window.location.href = '<?php echo base_url()?>index.php/welcome/index'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>