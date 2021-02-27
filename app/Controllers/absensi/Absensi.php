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
    public function form()
    {
        $dta = [
            'title' => 'Form Absensi'
        ];
        return view('absensi/form', $dta);
    }
}
