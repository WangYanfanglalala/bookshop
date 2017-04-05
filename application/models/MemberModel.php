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
}