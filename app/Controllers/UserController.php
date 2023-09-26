<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController{
    public function index(){
        //
    }

    public function profile($nama = '', $kelas = '', $npm = ''){
       // session();
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create(){
        // $kelasModel = new KelasModel();
        // $kelas = $kelasModel->getKelas();

        // $data = [
        //     'kelas' => $kelas,
        // ];

        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
        ];
        //session();
        if (session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }
        $data = [
            'kelas' => $kelas,
            'validation' => $validation
        ];
        return view('create_user', $data);
    }

    public function store(){
        $userModel = new UserModel();
        if(!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[user.nama]',
                'errors' =>[
                    'required' => '{field} Kolom ini wajib diisi',
                    'is_unique' => '{field} Nama sudah ada'
                ]
            ]
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        }


        session();
        $data = [
            'kelas' =>  $this->request->getVar('kelas'),
            'nama' =>  $this->request->getVar('nama'),
            'npm' =>  $this->request->getVar('npm'),
        ];

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        return view('profile', $data);
    }
}