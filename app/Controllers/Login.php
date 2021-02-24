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
        helper('form');
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

                if (count($user) > 0) {
                if ($user[0]->role == 'guru') {
                    session()->set('log', true);
                    session()->set('id', $cek['id']);
                    session()->set('nip', $cek['nip']);
                    session()->set('nama', $cek['nama']);
                    session()->set('jenis_kelamin', $cek['jenis_kelamin']);
                    session()->set('alamat', $cek['alamat']);
                    session()->set('no_telp', $cek['no_telp']);
                    session()->set('gambar', $cek['gambar']);
                    session()->set('username', $cek['username']);
                    session()->set('password', $cek['password']);
                    session()->set('role', $cek['role']);
                    session()->set('slug', $cek['slug']);
                    return redirect()->to('/dashboard-guru');
                }
                else {
                    session()->set('log', true);
                    session()->set('id', $cek['id']);
                    session()->set('nis', $cek['nis']);
                    session()->set('nama', $cek['nama']);
                    session()->set('jenis_kelamin', $cek['jenis_kelamin']);
                    session()->set('kelas', $cek['kelas']);
                    session()->set('jurusan', $cek['jurusan']);
                    session()->set('alamat', $cek['alamat']);
                    session()->set('no_telp', $cek['no_telp']);
                    session()->set('gambar', $cek['gambar']);
                    session()->set('username', $cek['username']);
                    session()->set('password', $cek['password']);
                    session()->set('role', $cek['role']);
                    session()->set('slug', $cek['slug']);
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

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    //--------------------------------------------------------------------

}
