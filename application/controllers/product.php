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
        $this->loadView('product_list');
    }
}