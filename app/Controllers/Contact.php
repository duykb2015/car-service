<?php

namespace App\Controller;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data["title"] = "Liên hệ";
        $data["temp"] = "site/contact/index";
        return view("site/layout", $data);
    }
}
