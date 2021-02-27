<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function guru()
	{
		if (session()->get('role') == 'siswa') {
			return redirect()->to('/dashboard-siswa');
		}
		$data = [
			'title' => 'Dashboard',
			'check' => 'dashboard',
			'user'  => 'guru',
		];
		return view('dashboard-guru/dashboard-guru', $data);
	}

	public function siswa()
	{
		if (session()->get('role') == 'guru') {
			return redirect()->to('/dashboard-guru');
		}
		$data = [
			'title' => 'Dashboard',
			'check' => 'dashboard',
			'user'  => 'siswa'
		];
		return view('dashboard-siswa/dashboard-siswa', $data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
