<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function guru()
    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        if (session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'guru',
            'validation' => \Config\Services::validation()
        ];
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-guru/profile-guru', $data);
    }

    public function siswa()
    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        if (session()->get('role') == 'guru') {
            return redirect()->to('/dashboard-guru');
        }
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'siswa',
            'validation' => \Config\Services::validation()
        ];
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-siswa/profile-siswa', $data);
    }

    public function edit($id)
    {
        //validasi input
        if (!$this->validate([
            'no_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Telepon harus diisi.'
                ]
            ],
            'alamat2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5120]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar ',
                    'mime_in' => 'Yang anda pilih bukan gambar '
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/comic/create')->withInput()->with('validation', $validation);
                return redirect()->to('/profile-siswa')->withInput();
        } else {
        //Ambil gambar
        $filegambar = $this->request->getFile('gambar');
        $notelp = $this->request->getVar('no_telepon');
        $alam = $this->request->getVar('alamat2');
        if ($filegambar->getError() == 4) {
            $namagambar = $this->request->getVar('gambarLama');
        } else {
            //Generate nama gambar
            $namagambar = $filegambar->getName();

            //Pindahkan file ke folder images
            $filegambar->move('assets/images', $namagambar);

            if ($this->request->getVar('gambarLama') != 'default.png') {
                unlink('assets/images/' . $this->request->getVar('gambarLama'));
            }
            $this->UserModel->save([
                'id' => $id,
                'no_telp' => $notelp,
                'alamat' => $alam,
                'gambar' => $namagambar
            ]);

            session()->setFlashdata('Pesan', 'Data berhasil ditambahkan.');
            return redirect()->to('/profile-siswa');
        }

    }

        //--------------------------------------------------------------------
    }

    public function save($id)
    {
        //validasi input
        if (!$this->validate([
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Telepon harus diisi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required[comic.penerbit]',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,5120]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar ',
                    'mime_in' => 'Yang anda pilih bukan gambar '
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/comic/create')->withInput()->with('validation', $validation);
                return redirect()->to('/profile-guru')->withInput();
        }
        //Ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //Generate nama sampul
            $namaSampul = $fileSampul->getName();

            //Pindahkan file ke folder images
            $fileSampul->move('assets/images', $namaSampul);

            if ($this->request->getVar('sampulLama') != 'default.png') {
                unlink('assets/images/' . $this->request->getVar('sampulLama'));
            }
            $this->UserModel->save([
                'id' => $id,
                'no_telp' => $this->request->getVar('no_telp'),
                'alamat' => $this->request->getVar('alamat'),
                'gambar' => $namaSampul
            ]);

            session()->setFlashdata('Pesan', 'Data berhasil ditambahkan.');

                return redirect()->to('/profile-guru');
        }

        //--------------------------------------------------------------------
    }
}
