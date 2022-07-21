<?php

namespace App\Controller;

use App\Controllers\BaseController;
use App\Models\ImagesModel;
use App\Models\NewsModel;
use App\Models\SlideModel;

class Home extends BaseController
{

    function index()
    {
        $slide = new SlideModel();
        $data["slide"] = $slide->findAll(3, 0);

        $news = new NewsModel();
        $data["news"] = $news->findAll(3, 0);
        
        $image = new ImagesModel();
        $data["images"] = $image->where('status', 1)->findAll();

        $data["title"] = "Trang chủ";
        $data["temp"] = "site/home/index";
        return view("site/layout", $data);
    }
}
