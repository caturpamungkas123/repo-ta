<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Selamat Datang Di Absensi AMIK PGRI KEBUMEN'
        ];
        return view('home', $dta);
    }
}
