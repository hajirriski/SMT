<?php

namespace App\Controllers;

class TambahData extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
    }
    public function index()
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
            return redirect()->to('/');
        } else {
            return redirect()->to('index');
        }
    }

    private function smt($provinsi, $kabupaten, $kecamatan, $kelurahan)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sevenmediatech.com/provinsi",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response, true);
    }
}
