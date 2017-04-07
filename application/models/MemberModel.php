<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 16:41
 */
class MemberModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tableName = 'tbl_member';
    }

    public function getMemberList()
    {
        $query_string = "SELECT * FROM `tbl_member`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getMemberFeedback()
    {
        $query_string = "SELECT * FROM `tbl_feedback`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function deleteMemberById($memberId)
    {
        $where = array(
            'id' => $memberId
        );
        $model = new BaseModel('tbl_member');
        return $model->delete($where);
    }

    public function SelectMemberInformation($username)
    {
        $queryData = array('username' => $username);
        $model = new BaseModel('tbl_member');
        return $model->getRow($field = "*", $queryData);
    }

    public function getMemberInformation($memberId)
    {
        $queryData = array('id' => $memberId);
        $model = new BaseModel('tbl_member');
        return $model->getRow($field = "*", $queryData);
    }

    public function verifyMemberPassword($memberId, $password)
    {
        $queryData = array('id' => $memberId,
            'password' => $password);
        $model = new BaseModel('tbl_member');
        return $model->getRow($field = "*", $queryData);
    }

    public function modifyMemberInformation($memberId, $username = '', $name = '', $phone = '', $email = '', $sex = 0, $birthday = '1970-01-01 00:00:00')
    {
        $memberData = array(
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'sex' => $sex,
            'birthday' => $birthday
        );
        $where = array(
            'id' => $memberId
        );
        $model = new BaseModel('tbl_member');
        return $model->update($memberData, $where);
    }

    public
    function insertMemberInformation($username = '', $name = '', $password = '', $phone = '', $email = '', $sex = 0, $birthday = '1970-01-01 00:00:00', $signup_time)
    {
        $memberData = array(
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'sex' => $sex,
            'signup_time' => $signup_time,
            'birthday' => $birthday
        );
        $model = new BaseModel('tbl_member');
        return $model->insert($memberData);
    }
}