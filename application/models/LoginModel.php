<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 16:41
 */
class LoginModel extends CI_Model
{
    public function __construct($tbl_name = '')
    {
        parent::__construct();
        $this->load->database();
    }

    public function signUp($username = '', $name = '', $email = '', $password = '')
    {
        $sql = "INSERT INTO `tbl_member` (`username`, `name`, `email`, `password`) "
            . "VALUES ("
            . $this->db->escape($username) . ", "
            . $this->db->escape($name) .", "
            . $this->db->escape($email) .", "
            . $this->db->escape($password)
            .")";
        $this->db->query($sql);
        return  $this->db->affected_rows();
    }
}