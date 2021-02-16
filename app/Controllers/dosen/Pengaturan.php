<?php

namespace App\Controllers\Dosen;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
    public function absensi()
    {
        $dta = [
            'title' => 'Pengaturan Absensi'
        ];
        return view('dosen/absensi', $dta);
    }
}
