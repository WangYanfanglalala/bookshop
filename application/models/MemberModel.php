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

    public function getMemberFeedback($feedback_search = array())
    {
        $this->db->select('*');
        $this->db->from('tbl_feedback');
        if (isset($feedback_search["username"]) && !empty($feedback_search["username"])) {
            $this->db->like('user_name', $feedback_search["username"]);
        }
        if (isset($feedback_search["feedback_status"]) && !empty($feedback_search["feedback_status"])) {
            $this->db->where('msg_status', $feedback_search["feedback_status"]);
        }
        if (isset($feedback_search["feedback_type"]) && !empty($feedback_search["feedback_type"])) {
            $this->db->where('msg_type', $feedback_search["feedback_type"]);
        }
        $query = $this->db->get();
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

    public function deleteMemberFeedback($msg_id)
    {
        $where = array(
            'msg_id' => $msg_id
        );
        $model = new BaseModel('tbl_feedback');
        return $model->delete($where);
    }

    public function updateMemberPassword($member_id)
    {
        $where = array(
            'id' => $member_id
        );
        $updateData = array(
            'password' => sha1('111111')
        );
        $model = new BaseModel('tbl_member');
        return $model->update($updateData, $where);
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

    public function insertMemberInformation($username = '', $name = '', $password = '', $phone = '', $email = '', $sex = 0, $birthday = '1970-01-01 00:00:00', $signup_time)
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

    public function getFeedbackInformation($msg_id)
    {
        $queryData = array('msg_id' => $msg_id);
        $model = new BaseModel('tbl_feedback');
        return $model->getRow($field = "*", $queryData);
    }

    public function addReplyFeedback($msg_id, $reply_content)
    {
        $feedback = array(
            'reply_content' => $reply_content
        );
        $where = array(
            'msg_id' => $msg_id
        );
        $model = new BaseModel('tbl_feedback');
        return $model->update($feedback, $where);
    }

    public function getUserAddress($user_id)
    {
        $query_string = "SELECT * FROM `tbl_member_address` WHERE `user_id` = " . $user_id;
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }
}