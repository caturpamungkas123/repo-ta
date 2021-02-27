<?php

namespace App\Controllers\Dosen;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
    public function absensi($matkul)
    {
        $this->form = new \App\Models\Dosen\FormModel();
        $dta = [
            'title' => 'Pengaturan Absensi',
            'forms' => $this->form->where(['matkul' => $matkul])->find()
        ];
        return view('dosen/absensi', $dta);
    }
    public function absen($matkul, $status)
    {
        $this->form = new \App\Models\Dosen\FormModel();
        // $dta = [
        //     'title' => 'Pengaturan Absensi',
        // ];
        // return view('dosen/absensi', $dta);
    }
}
