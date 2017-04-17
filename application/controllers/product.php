<?php

class Product extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('form');
        $this->load->model("ProductModel");
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile ')) {
            $error = array($this->upload->display_errors());
            $this->load->view('add_product', $error);
        }
        $data["test"] = '111111';
        $this->load->view('add_product', $data);
    }

    public function goodslist($goods_name = '', $min_price = 0, $goods_type_input = 0, $max_price = 0, $goods_brand = '')
    {
        $goods_type = $this->ProductModel->getProductAllSecondType();
        $data["goods_type"] = $goods_type;
        $data["goods_brand"] = $this->ProductModel->getProductBrand();
        $search = array(
            'goods_name' => empty($goods_name) ? $goods_name : urldecode($goods_name),
            'min_price' => $min_price,
            'max_price' => $max_price,
            'goods_type' => empty($goods_type_input) ? $goods_type_input : urldecode($goods_type_input),
            'goods_brand' => empty($goods_brand) ? $goods_brand : urldecode($goods_brand)
        );
        $goods_list = $this->ProductModel->getProductList($search);
        $data["goods_list"] = $goods_list;
        $data["search"] = $search;
        $this->load->view('product_list', $data);
    }

    public function add()
    {
        $data["goods_type"] = $this->ProductModel->getProductFirstType();
        foreach ($data["goods_type"] as $item) {
            $item->sub_type = $this->ProductModel->getProductSecondType($item->id);
        }
        $data["goods_brand"] = $this->ProductModel->getProductBrand();
        $this->loadView('add_product', $data);
    }

    public function edit($goods_id)
    {
        $goods_information = $this->ProductModel->getProductTnformationByGoodsId($goods_id);
        $data["goods_info"] = $goods_information;
        $data["goods_type"] = $this->ProductModel->getProductFirstType();
        foreach ($data["goods_type"] as $item) {
            $item->sub_type = $this->ProductModel->getProductSecondType($item->id);
        }
        $data["goods_brand"] = $this->ProductModel->getProductBrand();
        $this->loadView('edit_product', $data);
    }

    public function delete()
    {
        $goods_id = $this->input->post('goods_id');
        $result = $this->ProductModel->deleteGoodsByGoodsId($goods_id);
        $this->rspsJSON(true, '', $result);
    }

    public function addProduct()
    {
        date_default_timezone_set('PRC');
        $data = array(
            "goods_name" => $this->input->post('goods_name'),
            "goods_type" => $this->input->post('goods_type'),
            "goods_brand" => $this->input->post('goods_brand'),
            "market_price" => $this->input->post('market_price'),
            "shop_price" => $this->input->post('shop_price'),
            "stock" => $this->input->post('stock'),
            "add_time" => date('y-m-d h:i:s', time()),
            "goods_img" => $this->input->post('goods_img'),
            "sale_date" => $this->input->post('sale_date'),
            "add_point" => $this->input->post('add_point'),
            "consume_point" => $this->input->post('consume_point'),
            "goods_length" => $this->input->post('goods_length'),
            "goods_width" => $this->input->post('goods_width'),
            "goods_weight" => $this->input->post('goods_weight'),
            "goods_brief" => $this->input->post('goods_brief'),
            "goods_desc" => $this->input->post('goods_desc')
        );
        $result = $this->ProductModel->insertGoodsInfomation($data);
        $this->rspsJSON(true, '', $result);
    }

    public function editProduct()
    {
        $data = array(
            "goods_name" => $this->input->post('goods_name'),
            "goods_type" => $this->input->post('goods_type'),
            "goods_brand" => $this->input->post('goods_brand'),
            "shop_price" => $this->input->post('shop_price'),
            "stock" => $this->input->post('stock'),
            "goods_img" => $this->input->post('goods_img'),
            "sale_date" => $this->input->post('sale_date'),
            "add_point" => $this->input->post('add_point'),
            "consume_point" => $this->input->post('consume_point'),
            "goods_length" => $this->input->post('goods_length'),
            "goods_width" => $this->input->post('goods_width'),
            "goods_weight" => $this->input->post('goods_weight'),
            "goods_height" => $this->input->post('goods_height'),
            "goods_brief" => $this->input->post('goods_brief'),
            "goods_desc" => $this->input->post('goods_desc')
        );
        $goods_id = $this->input->post('goods_id');
        $result = $this->ProductModel->updateGoodsInformation($data, $goods_id);
        $this->rspsJSON(true, '', $result);
    }

    public function type()
    {
        $goods_type = $this->ProductModel->getProductType();
        foreach ($goods_type as $item) {
            $item->parent_name = $this->ProductModel->getProductParentTypeName($item->parent_id);
            $item->parent_name = $item->parent_name ? $item->parent_name : '顶级分类';
        }
        $data["goods_type_tree"] = $this->ProductModel->getProductFirstType();
        foreach ($data["goods_type_tree"] as $row) {
            $row->sub_type = $this->ProductModel->getProductSecondType($row->id);
        }
        $data["goods_type"] = $goods_type;
        $this->load->view('product_type', $data);
    }

    public function addGoodsType()
    {
        $goods_type = $this->ProductModel->getProductAllSecondType();
        $data["goods_type"] = $goods_type;
        $this->loadView('add_product_type', $data);
    }

    public function addProductType()
    {
        $goods_type = array(
            'type_name' => $this->input->post('type_name'),
            'describe' => $this->input->post('describe'),
            'parent_id' => $this->input->post('parent_id')
        );
        $result = $this->ProductModel->AddProductType($goods_type);
        return $this->rspsJSON(true, '', $result);
    }

    public function editType($type_id)
    {
        $type_info = $this->ProductModel->getTypeInfoByTypeId($type_id);
        $type_info["parent_name"] = $this->ProductModel->getProductParentTypeName($type_info["parent_id"]);
        $type_info["parent_name"] = $type_info["parent_name"] ? $type_info["parent_name"] : '顶级分类';
        $data["type_info"] = $type_info;
        $goods_type = $this->ProductModel->getProductAllSecondType();
        $data["goods_type"] = $goods_type;
        $this->loadView('edit_product_type', $data);
    }

    public function editGoodsType()
    {
        $type_id = $this->input->post('type_id');
        $type_info = array(
            'type_name' => $this->input->post('type_name'),
            'describe' => $this->input->post('describe'),
            'parent_id' => $this->input->post('parent_id')
        );
        $result = $this->ProductModel->updateGoodsType($type_id, $type_info);
        return $this->rspsJSON(true, '', $result);
    }

    public function deleteType()
    {
        $type_id = $this->input->post('type_id');
        $result = $this->ProductModel->deleteGoodsType($type_id);
        return $this->rspsJSON(true, '', $result);
    }

    public function brand()
    {
        $data["goods_brand"] = $this->ProductModel->getProductBrand();
        $this->load->view('product_brand', $data);
    }

    public function addBrand()
    {
        $this->loadView('add_product_brand');
    }

    public function addGoodsBrand()
    {
        $data = array(
            'brand_name' => $this->input->post('brand_name'),
            'website_url' => $this->input->post('website_url'),
            'brand_logo' => $this->input->post('brand_logo'),
            'brand_desc' => $this->input->post('brand_desc'),
            'sort_order' => $this->input->post('sort_order')
        );
        $result = $this->ProductModel->insertProductBrand($data);
        $this->rspsJSON(true, '', $result);
    }

    public function editBrand($brand_id)
    {
        $brand_info = $this->ProductModel->getBrandInformation($brand_id);
        $data["brand_info"] = $brand_info;
        $this->loadView('edit_product_brand', $data);
    }

    public function editGoodsBrand()
    {
        $brand_info = array(
            'brand_name' => $this->input->post('brand_name'),
            'website_url' => $this->input->post('website_url'),
            'brand_logo' => $this->input->post('brand_logo'),
            'brand_desc' => $this->input->post('brand_desc'),
            'sort_order' => $this->input->post('sort_order')
        );
        $brand_id = $this->input->post('sort_order');
        $result = $this->ProductModel->updateBrandInformation($brand_id, $brand_info);
        $this->rspsJSON(true, '', $result);
    }

    public function deleteBrand()
    {
        $brand_id = $this->input->post('brand_id');
        $result = $this->ProductModel->deleteProductBrand($brand_id);
        $this->rspsJSON(true, '', $result);
    }

    public function comment($username = '', $comment_goods = '', $status = 0, $comment_rank = 0)
    {
        $search_data = array(
            'username' => empty($username) ? $username : urldecode($username),
            'comment_goods' => empty($comment_goods) ? $comment_goods : urldecode($comment_goods),
            'status' => $status,
            'comment_rank' => $comment_rank
        );
        $comment = $this->ProductModel->getCommentList($search_data);
        foreach ($comment as $item) {
            switch ($item->status) {
                case 1:
                    $item->status = '未确认';
                    break;
                case 2:
                    $item->status = '处理中';
                    break;
                case 3:
                    $item->status = '已确认';
                    break;
            }
        }
        $data["comment"] = $comment;
        $this->load->view('comment_list', $data);
    }

    public function checkComment()
    {
        $commentStatus = array(
            'status' => 2
        );
        $comment_id = $this->input->post('comment_id');
        $result = $this->ProductModel->UpdateCommentStatus($comment_id, $commentStatus);
        $this->rspsJSON(true, '', $result);
    }

    /** 处理评论：处理评论的过程在线下进行，线上只标记该评论状态是在处理中
     * @param $comment_id
     */
    public function dealComment()
    {
        $commentStatus = array(
            'status' => 1
        );
        $comment_id = $this->input->post('comment_id');
        $result = $this->ProductModel->UpdateCommentStatus($comment_id, $commentStatus);
        $this->rspsJSON(true, '', $result);
    }
}