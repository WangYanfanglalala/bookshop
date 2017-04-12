<?php

class Statistic extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('form');
        $this->load->model("StatisticModel");
    }
    public function order(){
        $order = $this->StatisticModel->getTodayOrder();
    }
}