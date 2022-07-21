<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Services extends BaseController
{
    function index()
    {
        $total_rows = $this->Services_model->get_total();
        $this->load->library('pagination');
        $config = array();
        $config['total_rows']  = $total_rows;                //tong tat ca san pham
        $config['base_url']    = site_url("dich-vu");  //noi hien thi ra ds san pham
        $config['per_page']    = 12;                         //so luong hien thi moi trang
        $config['uri_segment'] = 4;                          //phan doan lay tren url de hien thi trang nao
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'segment';
        $config['next_link']   = 'Tiếp';        $config['next_link']   = 'Tiếp';

        $config['prev_link']   = 'Trước';
        $this->pagination->initialize($config);

        $segment = !empty($_GET["segment"]) ? $_GET["segment"] : 0;

        $input['limit'] = array($config['per_page'], $segment);
        $input['where'] = array('status' => 1);

        $this->data['services'] = $this->Services_model->get_list($input);


        $this->data["title"] = "Dịch vụ";
        $this->data["temp"] = "site/services/index";
        return view("site/layout", $this->data);
    }

    function detail()
    {
        $slug = $this->uri->rsegment(3);
        $input = array(
            'slug' => $slug,
            "status" => 1
        );
        $detail = $this->Services_model->get_info($input);
        $this->data["detail"] = $detail;

        $where_rel["where"] = [
            "id <> " => $detail->id,
            "status" => 1,
        ];
        $where_rel["limit"] = [5, 0];
        $this->data["relative_post"] = $this->Services_model->get_list($where_rel);
        $this->data['link'] = "dich-vu/";
        $this->data["title"] = "Chi tiết";
        $this->data["temp"] = "site/services/detail";
        return view("site/layout", $this->data);
    }
}
