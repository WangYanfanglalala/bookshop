<?php

class Mail extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('form');
        $this->load->model("MailModel");
        $this->load->library('email');
    }

    public function send()
    {
        $this->load->view('send_email');
    }

    public function sendemail()
    {
        $config["protocol"] = "smtp";
        $config["smtp_host"] = "smtp.163.com";
        $config["smtp_user"] = "15825573197@163.com";
        $config["smtp_pass"] = "1979_t_y_u";
        $config["smtp_port"] = "25";
        $config["validate"] = true;
        $this->email->initialize($config);
        $to_address = $this->input->post('to_address');
        $subject = $this->input->post('subject');
        $html_body = $this->input->post('html_body');
        $this->email->from('15825573197@163.com', 'wangyanfang');
        $this->email->to($to_address);
        $this->email->subject($subject);
        $this->email->message($html_body);
        $status = $this->email->send();
        if ($status)
            return $this->rspsJSON(true, '', $status);
        else
            return $this->rspsJSON(false, '邮件发送失败', '');
    }
}