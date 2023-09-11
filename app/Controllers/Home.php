<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function profile()
    {
        $data = [
            'nama' => 'Salma',
            'kelas' => 'A',
            'npm' => '2117051087',
        ];
        return view('profile', $data);
    }
}
