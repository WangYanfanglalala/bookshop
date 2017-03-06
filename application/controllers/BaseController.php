<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 10:51
 */
class BaseController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    public function loadView($template, $data = array())
    {
        $this->load->view('header');
        $this->load->view($template, $data);
        $this->load->view('footer');
    }
}