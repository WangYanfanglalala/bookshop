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

    public function index2()
    {
        $this->loadView('index_v2');
    }

    public function index3()
    {
        $this->loadView('index_v3');
    }

    public function index4()
    {
        $this->loadView('index_v4');
    }

    public function index5()
    {
        $this->loadView('index_v5');
    }

    public function login()
    {
        $this->loadView('login');
    }

    public function signup()
    {
        $this->loadView('add_admin');
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
        $registerData = array(
            'username' => $this->input->post("username"),
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'sex' => $this->input->post('sex')
        );
        //查询用户名是否已经存在
        if ($this->UserModel->SelectUserInformation($registerData["username"])) {
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
