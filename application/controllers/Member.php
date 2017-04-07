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

    public function deleteMember()
    {
        $memberId = $this->input->post('memberId');
        $result = $this->MemberModel->deleteMemberById($memberId);
        $this->rspsJSON(true, '', $result);
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

    public function edit($memberId)
    {
        $member = $this->MemberModel->getMemberInformation($memberId);
        $member["birthdayYear"] = substr($member["birthday"], 0, 4);
        $member["birthdayMonth"] = substr($member["birthday"], 5, 2);
        $member["birthdayDay"] = substr($member["birthday"], 8, 2);
        $data["member"] = $member;
        $this->loadView('edit_member', $data);
    }

    public function deleteFeedback()
    {
        $msg_id = $this->input->post('msgId');
        $data = $this->MemberModel->deleteMemberFeedback($msg_id);
        $this->rspsJSON(true, '', $data);
    }

    public function editMember()
    {
        $memberId = $this->input->post('memberId');
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $sex = $this->input->post('sex');
        $birthday = $this->input->post('birthday');
        //检验该会员所输入的密码是否正确
        $encryptedPassword = sha1($password);
        if ($this->MemberModel->verifyMemberPassword($memberId, $encryptedPassword)) {
            $data = $this->MemberModel->modifyMemberInformation($memberId, $username, $name, $phone, $email, $sex, $birthday);
            $this->rspsJSON(true, '', $data);
        } else {
            $this->rspsJSON(false, '密码错误', '');
        }
    }

    public function reply($msg_id)
    {
        $feedback = $this->MemberModel->getFeedbackInformation($msg_id);
        $data["feedback"] = $feedback;
        $this->loadView('reply_feedback', $data);

    }

    public function replyFeedback()
    {
        $msg_id = $this->input->post('msg_id');
        $reply_content = $this->input->post('reply_content');
        $result = $this->MemberModel->addReplyFeedback($msg_id, $reply_content);
        $this->rspsJSON(true, '', $result);
    }
}