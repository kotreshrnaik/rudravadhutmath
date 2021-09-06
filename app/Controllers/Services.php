<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Services extends Controller
{
	public function index()
	{
		
                return view('home_view');
	}
        public function services()
        {
            return view ('services_view');
        }
        
}
