<?php

class Product extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("ProductModel");
    }

    public function goodslist()
    {
        $data = $this->ProductModel->getProductList();
        $results["data"] = $data;
        $this->load->view('product_list', $results);
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
            "goods_sn" => $this->input->post('goods_sn'),
            "goods_name" => $this->input->post('goods_name'),
            "goods_type" => $this->input->post('goods_type'),
            "goods_brand" => $this->input->post('goods_brand'),
            "promote_start_date" => $this->input->post('promote_start_date'),
            "promote_end_date" => $this->input->post('promote_end_date'),
            "market_price" => $this->input->post('market_price'),
            "shop_price" => $this->input->post('shop_price'),
            "promote_price" => $this->input->post('promote_price'),
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
            "goods_sn" => $this->input->post('goods_sn'),
            "goods_name" => $this->input->post('goods_name'),
            "goods_type" => $this->input->post('goods_type'),
            "goods_brand" => $this->input->post('goods_brand'),
            "promote_start_date" => $this->input->post('promote_start_date'),
            "promote_end_date" => $this->input->post('promote_end_date'),
            "market_price" => $this->input->post('market_price'),
            "shop_price" => $this->input->post('shop_price'),
            "promote_price" => $this->input->post('promote_price'),
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
        $data["goods_type"] = $this->ProductModel->getProductFirstType();
        foreach ($data["goods_type"] as $item) {
            $item->sub_type = $this->ProductModel->getProductSecondType($item->id);
        }
        $this->load->view('product_type', $data);
    }

    public function brand()
    {
        $data["goods_brand"] = $this->ProductModel->getProductBrand();
        $this->load->view('product_brand', $data);
    }

    public function comment()
    {
        $comment = $this->ProductModel->getCommentList();
        $data["comment"] = $comment;
        $this->load->view('comment_list', $data);
    }
}