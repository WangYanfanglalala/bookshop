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

    public function getShippingOrderList()
    {
        $query_string = "SELECT * FROM `tbl_order` WHERE `shipping_status` = 1";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getCancelOrderList()
    {
        $query_string = "SELECT * FROM `tbl_order` WHERE `is_cancel` = 1";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getRegionName($region)
    {
        $queryData = array(
            'region_id' => $region
        );
        $model = new BaseModel('tbl_region');
        return $model->getRow($field = "*", $queryData);
    }

    public function getOrderDetailByOrderId($order_id)
    {
        $queryData = array(
            'order_id' => $order_id
        );
        $model = new BaseModel('tbl_order');
        return $model->getRow($field = "*", $queryData);
    }

    public function getOrderProductByOrderId($order_id)
    {
        $query_string = "SELECT * FROM `tbl_order_detail` WHERE order_id = " . $order_id;
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getUserOrderByUserId($user_id)
    {
        $query_string = "SELECT * FROM `tbl_order` WHERE `user_id` = " . $user_id;
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }
}