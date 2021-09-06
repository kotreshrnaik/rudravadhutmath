<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Ebooks extends Controller
{
	public function index()
	{
		
                return view('home_view');
	}
        public function ebooks()
        {
            return view ('ebooks_view');
        }
        
}
