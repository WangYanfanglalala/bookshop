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

    public function getProductTnformationByGoodsId($goods_id)
    {
        $queryData = array(
            'goods_id' => $goods_id
        );
        $model = new BaseModel('tbl_goods');
        return $model->getRow($field = "*", $queryData);
    }

    public function getProductFirstType()
    {
        $query_string = "SELECT * FROM `tbl_goods_type` WHERE `parent_id` = 0;";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getProductSecondType($id)
    {
        $query_string = "SELECT * FROM `tbl_goods_type` WHERE `parent_id` = ?;";
        $query = $this->db->query($query_string, array($id));
        $data = $query->result();
        return $data;
    }

    public function getProductBrand()
    {
        $query_string = "SELECT * FROM `tbl_goods_brand`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function getBrandInformation($brand_id)
    {
        $queryData = array(
            'id' => $brand_id
        );
        $model = new BaseModel('tbl_goods_brand');
        return $model->getRow($field = "*", $queryData);
    }

    public function insertProductBrand($data)
    {
        $model = new BaseModel('tbl_goods_brand');
        return $model->insert($data);
    }

    public function deleteProductBrand($brand_id)
    {
        $where = array(
            'id' => $brand_id
        );
        $model = new BaseModel('tbl_goods_brand');
        return $model->delete($where);
    }

    public function insertGoodsInfomation($goods_data)
    {
        $model = new BaseModel('tbl_goods');
        return $model->insert($goods_data);
    }

    public function updateGoodsInformation($goods_data, $goods_id)
    {
        $model = new BaseModel('tbl_goods');
        $where = array(
            'goods_id' => $goods_id
        );
        return $model->update($goods_data, $where);
    }

    public function deleteGoodsByGoodsId($goods_id)
    {
        $where = array(
            'goods_id' => $goods_id
        );
        $model = new BaseModel('tbl_goods');
        return $model->delete($where);
    }

    public function getCommentList()
    {
        $query_string = "SELECT `tbl_comment`.*, `tbl_goods`.`goods_name` FROM `tbl_comment` LEFT JOIN `tbl_goods` ON `tbl_comment`.`comment_goods` = `tbl_goods`.`goods_id`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function UpdateCommentStatus($comment_id, $status)
    {
        $updateData = array(
            'status' => $status
        );
        $where = array(
            'comment_id' => $comment_id
        );
        $model = new BaseModel('tbl_comment');
        return $model->update($updateData, $where);
    }
}