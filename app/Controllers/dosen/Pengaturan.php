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
    public function absen($matkul)
    {
        $this->form = new \App\Models\Dosen\FormModel();
        $dta = $this->form->where('matkul', $matkul)->find();
        foreach ($dta as $value);
        if ($value['status'] == 0) {
            $this->form->save([
                'id_matkul' => $value['id_matkul'],
                'matkul' => $this->request->getVar('matkul'),
                'status' => 1
            ]);
        } else {
            $this->form->save([
                'id_matkul' => $value['id_matkul'],
                'matkul' => $this->request->getVar('matkul'),
                'status' => 0
            ]);
        }
        return redirect()->to('/dosen/dosen/index');
    }
}
