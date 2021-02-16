<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi'
        ];
        return view('dashboard/konsultasi', $data);
    }

    //--------------------------------------------------------------------

}
