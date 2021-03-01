<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function guru()
	{
		$data = [];
		helper(['form']);
		$model = new UserModel();
		if (session()->get('role') == 'siswa') {
			return redirect()->to('/dashboard-siswa');
		}
		$data = [
			'title' => 'Dashboard',
			'check' => 'dashboard',
			'user'  => 'guru',
		];
		$data['user'] = $model->where('id', session()->get('id'))->first();
		return view('dashboard-guru/dashboard-guru', $data);
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
			'title' => 'Dashboard',
			'check' => 'dashboard',
			'user'  => 'siswa'
		];
		$data['user'] = $model->where('id', session()->get('id'))->first();
		return view('dashboard-siswa/dashboard-siswa', $data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
