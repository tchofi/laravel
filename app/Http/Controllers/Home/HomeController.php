<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    //Vue Dashboard
    public function dashboard()
    {
        return view ('dashboard');
    }

    //Vue Login
    public function login()
    {
        return view('login');
    }

    //Vue Table
    public function regularTable()
    {
        return view('regular');
    }

    //Vue Login
    public function loginContent()
    {
        return view('connection');
    }
    //Vue register(Enregistrer)
    public function register()
    {
        return view('inscription');
    }
    public function lock() //Page de garde 
    {
        return view('lock');
    }

    //Vue Pricing
    public function pricing()
    {
        return view('pricing');
    }
    //Vue Timeline
    public function timeline()
    {
        return view('timeline');
    }
    //Vue User
    public function user()
    {
        return view('user');
    }
    //Vue Error 
    public function error()
    {
        return view('error');
    }
    //Vue Button
    public function buttons()
    {
        return view('buttons');
    }
    //Vue Panels
    public function panels()
    {
        return view('panels');
    }
    //Vue Sweet-Alert
    public function sweetAlert()
    {
        return view('sweet-alert');
    }
    //Vue Grid
    public function grid()
    {
        return view('grid');
    }  

    //Vue Chart
    public function chart()
    {
        return  view('chart');
    }

    //Vue Notification
    public function notifications()
    {
        return view('notifications');
    }

    //vue index
    public function index()
    {
        return view("Home/welcome");
    }

    //Vue aPropos
    public function aPropos()
    {
        return view("a-propos");
    }
    //Vue Foire Aux Questions
    public function faq()
    {
        return view("FoireAuxQuestions");
    }

    //Vue historique
    public function historique()
    {
        return view("Historique");
    }
}
