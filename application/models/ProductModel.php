<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 16:41
 */
class ProductModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tableName = 'tbl_goods';
    }

    public function getProductList()
    {
        $query_string = "SELECT * FROM `tbl_goods`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function insertGoodsInfomation($goods_data)
    {
        $model = new BaseModel('tbl_goods');
        return $model->insert($goods_data);
    }
}