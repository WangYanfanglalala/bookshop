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
}