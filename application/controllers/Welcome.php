<?php

class Welcome extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('BaseModel');
        $this->load->model("UserModel");
        $this->load->library('session');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->loadView('index');
    }

    public function profile()
    {
        $admin_log = $this->UserModel->getAdminLoginLog($_SESSION["admin_user_id"]);
        $admin_info = $this->UserModel->getAdminInfoByUserId($_SESSION["admin_user_id"]);
        switch($admin_info["sex"]){
            case 0:
                $admin_info["sex"] = '保密';
                break;
            case 1:
                $admin_info["sex"] = '男';
                break;
            case 2:
                $admin_info["sex"] = '女';
                break;
        }
        $data["admin_log"] = $admin_log;
        $data["admin_info"] = $admin_info;
        $this->load->view('person_center', $data);
    }

    public function indexstat()
    {
        $this->loadView('index_stat');
    }

    public function index3()
    {
        $this->loadView('index_v3');
    }

    public function login()
    {
        $this->loadView('login');
    }

    public function signup()
    {
        $this->loadView('add_admin');
    }

    public function resetpassword()
    {
        $this->loadView('reset_password');
    }

    public function changePassword()
    {
        if (!$_POST["old_password"]) {
            $this->rspsJSON(false, '原密码不能为空', '');
            return false;
        }
        if (sha1($_POST["old_password"]) != $this->UserModel->getUserPasswordByUserId($_SESSION["admin_user_id"])) {
            $this->rspsJSON(false, '原密码不正确', '');
            return false;
        }
        if (!$_POST["new_password"]) {
            $this->rspsJSON(false, '新密码不能为空', '');
            return false;
        }
        if (!$_POST["new_password_again"]) {
            $this->rspsJSON(false, '确认密码不能为空', '');
            return false;
        }//判断两次输入密码是否一致
        if ($_POST["new_password"] != $_POST["new_password_again"]) {
            $this->rspsJSON(false, '两次输入密码不一致', '');
            return false;
        }
        if ($_POST["old_password"] == $_POST["new_password"]) {
            $this->rspsJSON(false, '新密码和旧密码不能一样');
            return false;
        }
        $result = $this->UserModel->resetPassword($_SESSION["admin_user_id"], sha1($_POST["new_password"]));
        return $this->rspsJSON(true, '', $result);
    }

    public function adminlist()
    {
        $admin = $this->UserModel->getAdminList();
        $data["admin"] = $admin;
        $this->load->view('admin_list', $data);
    }

    public function adminlog($admin_id)
    {
        $admin_log = $this->UserModel->getAdminLoginLog($admin_id);
        $data["admin_log"] = $admin_log;
        $this->load->view('admin_login_log', $data);
    }

    public function userRegister()
    {
        date_default_timezone_set('PRC');
        $registerData = array(
            'username' => $this->input->post("username"),
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'sex' => $this->input->post('sex'),
            'add_time' => date('Y-m-d H:i:s', time())
        );
        //查询用户名是否已经存在
        if ($this->UserModel->checkUserInformation($registerData["username"])) {
            $this->rspsJSON(false, '用户名已存在', '');
        } else {
            //插入用户信息到tbl_user表中
            $registerData["password"] = sha1($registerData["password"]);
            $data = $this->UserModel->InsertUserInformation($registerData);
            $this->rspsJSON(true, '', $data);
        }

    }

    public function userLogin()
    {
        //判断用户名是否为空
        if (!isset($_POST["username"])) {
            $this->rspsJSON(false, '用户名不能为空', '');
        } //判断密码是否为空
        else if (!isset($_POST["password"])) {
            $this->rspsJSON(false, '密码不能为空', '');
        } else {
            $username = $this->input->post("username");
            $password = sha1($this->input->post('password'));
            $result = $this->UserModel->SelectUserInformation($username, $password);
            if (empty($result)) {
                $this->rspsJSON(false, '用户不存在或者密码错误', '');
            } else {
                //将用户id存入session
                $user_data = $this->UserModel->getUserIdByUsername($username);
                $_SESSION["admin_user_id"] = $user_data["id"];
                //登录日志保存到数据库
                $server = array();
                $server["loginLog_IP"] = $_SERVER["HTTP_HOST"];
                $server["loginLog_address"] =
                $server["loginLog_time"] = time();
                $server["loginLog_address"] = $this->getAddress($server["loginLog_IP"]);
                $server["admin_user_admin_user_id"] = $_SESSION["admin_user_id"];
                $this->UserModel->addUserLog($server);
                $this->rspsJSON(true, '登录成功', '');

            }
        }
    }

    public function getAddress($queryIP)
    {
        $url = 'http://ip.qq.com/cgi-bin/searchip?searchip1=' . $queryIP;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_ENCODING, 'gb2312');
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回
        $result = curl_exec($ch);
        $result = mb_convert_encoding($result, "utf-8", "gb2312"); // 编码转换，否则乱码
        curl_close($ch);
        preg_match("@<span>(.*)</span></p>@iU", $result, $ipArray);
        if (empty($ipArray)) {
            return '网络信号不好，获取地理位置失败';
        } else {
            $loc = $ipArray[1];
            return $loc;
        }
    }
}
