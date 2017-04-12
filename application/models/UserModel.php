<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 16:41
 */
class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tableName = 'tbl_user';
    }

    /**插入一条用户信息到tbl_user表中
     * @param string $username
     * @param string $name
     * @param string $email
     * @param string $password
     * @return mixed
     */
    public function InsertUserInformation($adminData)
    {
        $model = new BaseModel('tbl_user');
        return $model->insert($adminData);
    }

    public function getAdminList()
    {
        $query_string = "SELECT * FROM `tbl_user`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getAdminLoginLog($admin_id)
    {
        $query_string = "SELECT * FROM tbl_loginlog WHERE  `admin_user_admin_user_id` = ".$admin_id;
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getUserIdByUsername($username)
    {
        $queryData = array(
            'username' => $username
        );
        $model = new BaseModel('tbl_user');
        return $model->getRow($field = 'id', $queryData);
    }

    /** 保存管理员登录日志到'tbl_loginLog'表中
     * @param $data 要插入放入数据
     * @return int
     */
    public function addUserLog($data)
    {
        $model = new BaseModel('tbl_loginLog');
        return $model->insert($data);
    }

    public function SelectUserInformation($username, $password)
    {
        $queryData = array(
            'username' => $username,
            'password' => $password
        );
        $model = new BaseModel('tbl_user');
        return $model->getRow($field = "*", $queryData);
    }

    public function selectUser($username, $password)
    {
        $queryData = array(
            'username' => $username,
            'password' => $password
        );
        $model = new BaseModel('tbl_user');
        return $model->getRow($field = "*", $queryData);
    }
}