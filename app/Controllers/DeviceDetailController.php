<?php

namespace App\Controllers;


class DeviceDetailController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Barang'
        ];

        return view('device/index', $data);
    }
    public function samsung()
    {
        $data =[
            'title' => 'Samsung'
        ];
        return view('device/samsung', $data);
    }
    public function hp()
    {
        $data =[
            'title' => 'HP'
        ];
        return view('device/hp', $data);
    }
    public function ceria()
    {
        $data =[
            'title' => 'Ceria'
        ];
        return view('device/ceria', $data);
    }
    public function apple()
    {
        $data =[
            'title' => 'Apple'
        ];
        return view('device/apple', $data);
    }
}