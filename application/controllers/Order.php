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
    public function detail($order_id){
        $order_detail = $this->OrderModel->getOrderDetailByOrderId($order_id);
        $order_product =$this->OrderModel->getOrderProductByOrderId($order_id);
        $order_detail["order_status"] = $order_detail["order_status"]?"已确认":"未确认";
        $order_detail["shipping_status"] = $order_detail["shipping_status"]?"已发货":"未发货";
        $order_detail["pay_status"] = $order_detail["pay_status"]?"已付款":"未付款";
        switch($order_detail["pay_type"]){
            case 1:
                $order_detail["pay_type"] = "现金支付";
                break;
            case 2:
                $order_detail["pay_type"] = "支付宝支付";
                break;
            case 3:
                $order_detail["pay_type"] = "微信支付";
                break;
        }
        $data["order_detail"] = $order_detail;
        $data["order_product"] = $order_product;
        $this->load->view('order_detail',$data);
    }
    public function shipping(){
        $data = $this->OrderModel->getShippingOrderList();
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
        $this->load->view('shipping_order_list',$results);
    }
    public function cancel(){
        $data = $this->OrderModel->getCancelOrderList();
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
        $this->load->view('cancel_order_list',$results);
    }
}
