<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;

class Mahasiswa extends BaseController
{
    public function data()
    {
        $dta = [
            'title' => 'Daftar Mahasiswa'
        ];
        return view('mahasiswa/data', $dta);
    }
}
