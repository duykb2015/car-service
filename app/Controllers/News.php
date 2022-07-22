<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class News extends BaseController
{

    function index()
    {
        $news = new NewsModel();
        $data = [
            'news' => $news->paginate(10),
            'pager' => $news->pager,
        ];  

        $data["title"] = "Tin tức";
        $data["temp"] = "site/news/index";
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
        $news = new NewsModel();
        $detail = $news->where($input)->first();
        $this->data["detail"] = $detail;
       

        $where_rel = [
            "id <> " => $detail->id,
            "status" => 1,
        ];
        $this->data["relative_post"] = $news->where($where_rel)->findAll(5);
        $this->data['link'] = "tin-tuc/";
        $this->data["title"] = "Chi tiết";
        $this->data["temp"] = "site/news/detail";
        return view("site/layout", $this->data);
    }
}
