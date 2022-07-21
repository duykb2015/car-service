<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImagesModel;
use App\Models\NewsModel;
use App\Models\SlideModel;

class Home extends BaseController
{

    public function index()
    {   
        $slide = new SlideModel();
        $data["slide"] = $slide->query("SELECT * FROM slide")->getResult();

        $news = new NewsModel();
        $data["news"] = $news->query("SELECT * FROM news")->getResult();
        
        $image = new ImagesModel();
        $data["images"] = $image->query("SELECT * FROM images WHERE status = 1")->getResult();

        $data["title"] = "Trang chủ";
        $data["temp"] = "site/home/index";
        return view("site/layout", $data);
    }
}
