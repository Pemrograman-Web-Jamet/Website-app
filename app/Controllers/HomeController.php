<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Home | IoT Monitoring - DEXA'
        ];
        
        return view('pages/home', $data);
    }

    public function jokes()
    {
        $data =[
            'title' => 'Page Jokes'
        ];
        return view('pages/jokes', $data);
    }

}