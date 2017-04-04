<?php

class Order extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("OrderModel");
    }

    public function orderlist()
    {
        $data = $this->OrderModel->getOrderList();
        foreach($data as $item){
            $country = $this -> OrderModel -> getRegionName($item->country);
            $province = $this -> OrderModel -> getRegionName($item -> province);
            $city = $this -> OrderModel -> getRegionName($item -> city);
            $item->country = $country["region_name"];
            $item->province = $province["region_name"];
            $item->city = $city["region_name"];
            $item->order_status = $item->order_status? "已确认":"未确认";
            $item->shipping_status = $item->shipping_status? "已发货":"未发货";
            $item->pay_status = $item->pay_status? "已付款":"未付款";
        }
        $results["data"] = $data;
        $this->load->view('order_list', $results);
    }
    public function detail(){
        $this->load->view('order_detail');
    }
}
