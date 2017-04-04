<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 16:41
 */
class OrderModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tableName = 'tbl_order';
    }

    public function getOrderList()
    {
        $query_string = "SELECT * FROM `tbl_order`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }
    public function getRegionName($region){
        $queryData = array(
            'region_id' => $region
        );
        $model = new BaseModel('tbl_region');
        return $model ->getRow($field = "*", $queryData);
    }
}