<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//เรียกใช้ความสามารถของไรเบอร์รี้

class DemoController extends Controller
{
    public function index()
    {
        // return "Method GET: Index";
         return view('templete');

    }

    public function demotwo()
    {
        return "Method POST: demotwo";
    }

    public function demothree()
    {
        return "Method GET, POST : demothree";
    }

    public function demofour()
    {
        return "Method GET, POST, PUT/PATCH, DELETE : demofour";
    }
}
 //

