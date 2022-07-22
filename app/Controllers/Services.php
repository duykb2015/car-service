<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServicesModel;

class Services extends BaseController
{
    function index()
    {
        $services = new ServicesModel();
        $data = [
            'service' => $services->paginate(10),
            'pager' => $services->pager
        ];

        $data['services'] = $services = $services->where('status', 1)->findAll(10);;

        $data["title"] = "Dịch vụ";
        $data["temp"] = "site/services/index";
        return view("site/layout", $data);
    }

    function detail()
    {
        $uri = service('uri');
        $slug = explode('.html', $uri->getSegment(2))[0];
        $input = array(
            'slug' => $slug,
            "status" => 1
        );
        $services = new ServicesModel();
        $detail = $services->where($input)->first();
        $this->data["detail"] = $detail;

        $where_rel = [
            "id <> " => $detail->id,
            "status" => 1,
        ];
        $this->data["relative_post"] = $services->where($where_rel)->findAll(5);
        $this->data['link'] = "dich-vu/";
        $this->data["title"] = "Chi tiết";
        $this->data["temp"] = "site/services/detail";
        return view("site/layout", $this->data);
    }
}
