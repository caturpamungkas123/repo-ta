<?php

namespace App\Controllers\Dosen;

use App\Controllers\BaseController;

class Dosen extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Dashboard Dosen'
        ];
        return view('dosen/dashboard', $dta);
    }
}
