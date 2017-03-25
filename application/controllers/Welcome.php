<?php

class Welcome extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("UserModel");
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
        $this->loadView('register');
    }

    public function userRegister()
    {
        $username = $this->input->post("username");
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        //查询用户名是否已经存在
        if ($this->UserModel->SelectUserInformation($username)) {
            $this->rspsJSON(false, '用户名已存在', '');
        } else {
            //插入用户信息到tbl_user表中
            $data = $this->UserModel->InsertUserInformation($username, $name, $email, $password);
            $this->rspsJSON(true, '', $data);
        }

    }
}
