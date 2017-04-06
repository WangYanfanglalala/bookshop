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
    public function InsertUserInformation($username = '', $name = '', $email = '', $password = '')
    {
        $userData = array('username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password
        );
        $model = new BaseModel('tbl_user');
        return $model->insert($userData);
    }
    public function SelectUserInformation($username)
    {
        $queryData = array('username' => $username);
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