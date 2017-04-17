<?php

class Member extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("MemberModel");
        $this->load->model('OrderModel');
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

    public function resetPassword()
    {
        $member_id = $this->input->post('member_id');
        $result = $this->MemberModel->updateMemberPassword($member_id);
        return $this->rspsJSON(true, '', $result);
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

    /*
        public function deleteMember()
        {
            $memberId = $this->input->post('memberId');
            $result = $this->MemberModel->deleteMemberById($memberId);
            $this->rspsJSON(true, '', $result);
        }*/

    public function feedback($username = "", $feedback_status = 0, $feedback_type = 0)
    {
        date_default_timezone_set('PRC');
        $search_feedback = array(
            'username' => $username ? $username : urldecode($username),
            'feedback_status' => $feedback_status,
            'feedback_type' => $feedback_type
        );
        $feedback = $this->MemberModel->getMemberFeedback($search_feedback);
        foreach ($feedback as $item) {
            switch ($item->msg_type) {
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
            switch ($item->msg_status) {
                case 1:
                    $item->msg_status = '未回复';
                    break;
                case 2:
                    $item->msg_status = '已回复';
                    break;
            }
        }
        $data["feedback"] = $feedback;
        $this->load->view('feedback_list', $data);
    }

    /*
        public function edit($memberId)
        {
            $member = $this->MemberModel->getMemberInformation($memberId);
            $member["birthdayYear"] = substr($member["birthday"], 0, 4);
            $member["birthdayMonth"] = substr($member["birthday"], 5, 2);
            $member["birthdayDay"] = substr($member["birthday"], 8, 2);
            $data["member"] = $member;
            $this->loadView('edit_member', $data);
        }*/

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

    public function detail($user_id)
    {
        $address = $this->MemberModel->getUserAddress($user_id);
        foreach ($address as $item) {
            $country = $this->OrderModel->getRegionName($item->country);
            $province = $this->OrderModel->getRegionName($item->province);
            $city = $this->OrderModel->getRegionName($item->city);
            $district = $this->OrderModel->getRegionName($item->district);
            $item->country = $country["region_name"];
            $item->province = $province["region_name"];
            $item->city = $city["region_name"];
            $item->district = $district["region_name"];
        }
        $order = $this->OrderModel->getUserOrderByUserId($user_id);
        $data["address"] = $address;
        $data["order"] = $order;
        $this->load->view('member_detail', $data);
    }
}