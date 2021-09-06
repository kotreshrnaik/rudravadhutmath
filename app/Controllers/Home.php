<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		
                return view('home_view');
	}
        public function about()
        {
            return view ('about_view');
        }
        public function gallery()
        {
            return view ('gallery_view');
        }
        public function contact()
        {
            return view ('contact_view');
        }
}
