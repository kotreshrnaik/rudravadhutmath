<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class More extends Controller
{
	public function index()
	{
		
                return view('home_view');
	}
        public function more()
        {
            return view ('more_view');
        }
        
}
