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

    public function add()
    {
        $this->loadView('add_member');
    }

    public function addMember()
    {
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
            $data = $this->MemberModel->insertMemberInformation($username, $name, $encryptedPassword, $phone, $email, $sex, $birthday, $signup_time);
            $this->rspsJSON(true, '', $data);
        }

    }

    public function feedback()
    {
        $feedback = $this->MemberModel->getMemberFeedback();
        foreach ($feedback as $item) {
            switch ($item->msg_type) {
                case 0:
                    $item->msg_type = '留言';
                    break;
                case 1:
                    $item->msg_type = '投诉';
                    break;
                case 2:
                    $item->msg_type = '售后';
                    break;
                case 3:
                    $item->msg_type = '求购';
                    break;
                case 4:
                    $item->msg_type = '询问';
                    break;
                default:
                    $item->msg_type = '留言';
            }
            $item->msg_status = $item->msg_status ? '未回复' : '已回复';
            $item->msg_time = date('y-m-d h:i:s', $item->msg_time);
        }
        $data["feedback"] = $feedback;
        $this->load->view('feedback_list', $data);
    }
}