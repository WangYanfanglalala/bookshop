<?php

class Member extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("MemberModel");
    }

    public function memberlist()
    {
        $member = $this->MemberModel->getMemberList();
        $data["member"] = $member;
        $this->load->view('member_list', $data);
    }
    public function add(){
        $this->loadView('add_member');
    }
    public function addMember(){
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $sex = $this->input->post('sex');
        $birthday = $this->input->post('birthday');
        $signup_time = date('y-m-d h:i:s', time());
        //查询会员名是否已经存在
        if ($this->MemberModel->SelectMemberInformation($username)) {
            $this->rspsJSON(false, '该会员名已存在', '');
        } else {
            //插入会员信息到tbl_member表中
            $encryptedPassword = sha1($password);
            $data = $this->MemberModel->insertMemberInformation($username, $name, $encryptedPassword,$phone,$email,$sex,$birthday,$signup_time);
            $this->rspsJSON(true, '', $data);
        }

    }
}