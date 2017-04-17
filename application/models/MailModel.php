<?php

class MailModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tableName = 'tbl_goods';
    }
}