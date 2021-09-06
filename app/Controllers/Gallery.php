<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Gallery extends Controller
{
	public function index()
	{
		
                return view('home_view');
	}
        public function gallery()
        {
            return view ('gallery_view');
        }
        
}
