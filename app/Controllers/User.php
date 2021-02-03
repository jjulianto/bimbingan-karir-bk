<?php

namespace App\Controllers;

class User extends BaseController
{
    public function siswa()
    {
        $data = [
            'title' => 'List Siswa',
            'user' => 'List Siswa',
        ];
        return view('dashboard/user', $data);
    }

    //--------------------------------------------------------------------

}
