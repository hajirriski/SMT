<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $url = "https://api.sevenmediatech.com/provinsi";
    
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        $mahasiswaModel = new \App\Models\MahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();
        return view('home', [
            'mahasiswas' => $mahasiswa
        ]);
    }
    public function datajurusan()
    {
        $jurusanModel = new \App\Models\JurusanModel();
        $jurusan = $jurusanModel->findAll();
        return view('datajurusan', [
            'jurusans' => $jurusan
        ]);
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function tambah()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $mahasiswaModel = new \App\Models\MahasiswaModel();
            $mahasiswa = new \App\Entities\Mahasiswa();
            $mahasiswa->fill($data);

            $mahasiswaModel->save($mahasiswa);
        } else {
            return redirect()->to('tambahdata');
        }
        return view('index');
    }
}
