<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    function index()
    {
        $data["title"] = "Giới thiệu";
        $data["temp"] = "site/about/index";
        return view("site/layout", $data);
    }
}
