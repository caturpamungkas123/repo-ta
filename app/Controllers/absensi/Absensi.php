<?php

namespace App\Controllers\Absensi;

use App\Controllers\BaseController;

class Absensi extends BaseController
{
    public function data()
    {
        $dta = [
            'title' => 'Absensi Mahasiswa'
        ];
        return view('absensi/data', $dta);
    }
    public function rekap()
    {
        $dta = [
            'title' => 'Rekap Absensi'
        ];
        return view('absensi/rekap', $dta);
    }
}
