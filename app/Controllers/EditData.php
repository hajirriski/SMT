<?php

namespace App\Controllers;

class EditData extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
    }
    public function editdata()
    {
        $mahasiswaModel = new \App\Models\MahasiswaModel();
        $id_post = $this->request->uri->getSegment(3);
        $mahasiswa = $mahasiswaModel->where('id', $id_post)->findAll();
        return view('editdata', [
          'mahasiswas' => $mahasiswa,
        ]);
    }
    public function edit()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $mahasiswaModel = new \App\Models\MahasiswaModel();
            $mahasiswaEntity = new \App\Entities\Mahasiswa();
            $id = $this->request->getPost('id');

            $mahasiswaModel->where("id", $id)->first();

            $mahasiswaEntity->fill($data);
            $mahasiswaModel->save($mahasiswaEntity);
            
            return redirect()->to('/');

        } else {
            return redirect()->to('index');
        }
    }
    public function hapus()
    {
            $data = $this->request->getPost();
            $mahasiswaModel = new \App\Models\MahasiswaModel();
            $id = $this->request->uri->getSegment(3);
            $mahasiswaModel->where('id', $id)->delete();
            return redirect()->to('/');
    }

}
