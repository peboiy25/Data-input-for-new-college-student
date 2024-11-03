<?php

namespace App\Controllers;
use App\Models\Mahasiswa;

class Pmb extends BaseController
{
    public function index(): string
    {
        $mahasiswa = new Mahasiswa();
        $data = [
            'Mahasiswa' => $mahasiswa->findAll(),
        ];
        return view('beranda', $data);
    }

    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $data = $this->request->getPost(['nim','nama','program_studi','konsentrasi']);
        $mahasiswa->save($data);
        session()->setFlashdata('pesan', 'Data Mahasiswa Sudah Berhasil Ditambahkan');
        return redirect()->to('/');
    }
}
