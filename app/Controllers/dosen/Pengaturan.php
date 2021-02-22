<?php

namespace App\Controllers\Dosen;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
    public function absensi()
    {
        if (!session()->get('matkul')) {
            session()->set('matkul', true);
        } else {
            session()->remove('matkul');
        }
        $dta = [
            'title' => 'Pengaturan Absensi'
        ];
        return view('dosen/absensi', $dta);
    }
}
