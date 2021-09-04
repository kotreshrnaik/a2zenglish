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
        public function more()
        {
            return view ('more_view');
        }
}
