<?php

namespace App\Http\Controllers\Home;
use  App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function contact()
    {
        return view("Home/contact");
    }
}