<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response()->view('home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function projectAida()
    {
        return view('project.aida');
    }

    public function projectCent()
    {
        return view('project.cent');
    }
    public function projectBotan()
    {
        return view('project.botan');
    }
    public function projectKn()
    {
        return view('project.kn');
    }

    public function ownerBoi()
    {
        return view('owner.boi');
    }


    public function explain()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/explain.pdf');
    }


    public function start()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/start.pdf');
    }



    public function april()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/start2.pdf');
    }


    public function gains()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/прибыли_и_убытки.pdf');
    }


    public function move()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/движения_средств.pdf');
    }

    public function license()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/license.pdf');
    }


    public function license_kaz()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/license2.pdf');
    }
    public function change()
    {
        return response()->file('/home/user/Desktop/centras-credit/resources/static/change.pdf');
    }














}
