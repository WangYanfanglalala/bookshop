<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("LoginModel");
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
        $this->load->view('header');
        $this->load->view('index');
    }

    public function login()
    {
        $this->load->view('header');
        $this->load->view('login');
    }

    public function signup()
    {
        $username = $this->input->post("username");
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $insert_result = $this->LoginModel->signup($username, $name, $email, $password);
        echo $insert_result;
        $this->load->view('header');
        $this->load->view('register', $insert_result);
    }
}
