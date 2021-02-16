<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'check' => 'dashboard'
		];
		return view('dashboard/dashboard', $data);
	}

	//--------------------------------------------------------------------

}
