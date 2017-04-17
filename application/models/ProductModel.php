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

    public function getProductList($search = array())
    {
        $this->db->select("*");
        $this->db->from('tbl_goods');
        if (isset($search["goods_name"]) && !empty($search["goods_name"])) {
            $this->db->like('goods_name', $search["goods_name"]);
        }
        if (isset($search["min_price"]) && !empty($search["goods_name"])) {
            $this->db->where('shop_price >=', $search["min_price"]);
        }
        if (isset($search["max_price"]) && !empty($search["max_price"])) {
            $this->db->where('shop_price <=', $search["max_price"]);
        }
        if (isset($search["goods_type"]) && !empty($search["goods_type"])) {
            $this->db->where('goods_type', $search["goods_type"]);
        }
        if (isset($search["goods_brand"]) && !empty($search["goods_brand"])) {
            $this->db->where('goods_brand', $search["goods_brand"]);
        }
        $query = $this->db->get();
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

    public function getProductType()
    {
        $query_string = "SELECT * FROM `tbl_goods_type`";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
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

    public function getProductParentTypeName($parent_id)
    {
        $queryData = array(
            'id' => $parent_id
        );
        $model = new BaseModel('tbl_goods_type');
        $result = $model->getRow($field = "*", $queryData);
        return $result["type_name"];
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

    public function updateBrandInformation($brand_id, $brand_info)
    {
        $where = array(
            'id' => $brand_id
        );
        $model = new BaseModel('tbl_goods_brand');
        return $model->update($brand_info, $where);
    }

    public function getProductAllSecondType()
    {
        $query_string = "SELECT * FROM `tbl_goods_type` WHERE `parent_id` = 0";
        $query = $this->db->query($query_string);
        $data = $query->result();
        return $data;
    }

    public function AddProductType($type_info)
    {
        $model = new BaseModel('tbl_goods_type');
        return $model->insert($type_info);
    }

    public function getTypeInfoByTypeId($type_id)
    {
        $type_info = array(
            "id" => $type_id
        );
        $model = new BaseModel('tbl_goods_type');
        return $model->getRow($field = "*", $type_info);
    }

    public function updateGoodsType($type_id, $type_info)
    {
        $where = array(
            'id' => $type_id
        );
        $model = new BaseModel('tbl_goods_type');
        return $model->update($type_info, $where);
    }

    public function deleteGoodsType($type_id)
    {
        $where = array(
            'id' => $type_id
        );
        $model = new BaseModel('tbl_goods_type');
        return $model->delete($where);
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

    public function getCommentList($goods_comment = array())
    {
        $this->db->select("tbl_comment.*,tbl_goods.goods_name");
        $this->db->from("tbl_comment");
        $this->db->join('tbl_goods', 'tbl_goods.goods_id = tbl_comment.comment_goods', 'left');
        if (isset($goods_comment["username"]) && !empty($goods_comment["username"])) {
            $this->db->like('user_name', $goods_comment["username"]);
        }
        if (isset($goods_comment["status"]) && !empty($goods_comment["status"])) {
            $this->db->where('status', $goods_comment["status"]);
        }
        if (isset($goods_comment["comment_rank"]) && !empty($goods_comment["comment_rank"])) {
            $this->db->where('comment_rank', $goods_comment["comment_rank"]);
        }
        if (isset($goods_comment["comment_goods"]) && !empty($goods_comment["comment_goods"])) {
            $this->db->like('goods_name', $goods_comment["comment_goods"]);
        }
        $this->db->order_by('status', 'ASC');
        $this->db->order_by('add_time', "DESC");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function UpdateCommentStatus($comment_id, $updateData)
    {
        $where = array(
            'comment_id' => $comment_id
        );
        $model = new BaseModel('tbl_comment');
        return $model->update($updateData, $where);
    }
}