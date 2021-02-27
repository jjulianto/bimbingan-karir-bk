<?php

namespace App\Controllers;

use \App\Models\AuthModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->AuthModel = new AuthModel();
        helper('form');
        $this->moduser = model('App\Models\UserModel');
    }

    public function login()
    {
        $data = [
            'title' => 'Login Form',
            'validation' => \Config\Services::validation()
        ];
        return view('login', $data);
    }

    public function auth()
    {
        if ($this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->login($username, $password);
            if ($cek) {
                $datauser = [
                    'username' => $username,
                    'password' => $password
                ];

                $user = $this->moduser->asObject()->where($datauser)->limit(1)->find();
                session()->set('log', true);
                session()->set('id', $cek['id']);
                session()->set('nip', $cek['nip']);
                session()->set('nis', $cek['nis']);
                session()->set('nama', $cek['nama']);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('role', $cek['role']);
                session()->set('slug', $cek['slug']);

                if (count($user) > 0) {
                    if ($user[0]->role == 'guru') {
                        return redirect()->to('/dashboard-guru');
                    } else {
                        return redirect()->to('/dashboard-siswa');
                    }
                }
            } else {
                session()->setFlashdata('pesan', 'Username atau password salah');
                return redirect()->to('/');
            }
        } else {
            return redirect()->to('/')->withInput();
        }
    }

    //--------------------------------------------------------------------

}
