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
                                <label class="col-sm-3 control-label">会员名称：</label>

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
                                <label class="col-sm-3 control-label">邮件地址：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="邮件地址" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">手机号码：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                           placeholder="手机号码" required="required">
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
                                    <input type="password" name="password" id="passwordAgain" class="form-control"
                                           placeholder="确认登录密码" required="required">
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
                                <label class="col-sm-3 control-label">出生日期：</label>

                                <div class="col-sm-9">
                                    <select name="birthdayYear" id="birthdayYear">
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                    </select>&nbsp;
                                    <select name="birthdayMonth" id="birthdayMonth">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>&nbsp;
                                    <select name="birthdayDay" id="birthdayDay">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button class="btn btn-primary" type="button" onclick="add_member()">
                                        添加会员
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
    function add_member() {
        var username = document.getElementById("username").value;
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var password = document.getElementById("password").value;
        var passwordAgain = document.getElementById("passwordAgain").value;
        var sex = $('#userSex input[name="sex"]:checked ').val();
        var birthdayYear = $("#birthdayYear option:selected").val();
        var birthdayMonth = $("#birthdayMonth option:selected").val();
        var birthdayDay = $("#birthdayDay option:selected").val();
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
        var url = '<?php echo base_url(); ?>index.php/member/addMember';
        var data = {
            username: username,
            name: name,
            password: password,
            email: email,
            sex: sex,
            phone: phone,
            birthday: (new Date(birthdayYear, birthdayMonth, birthdayDay)).toISOString().substr(0, 19).replace('T', ' ')
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('添加成功');
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>

</body>