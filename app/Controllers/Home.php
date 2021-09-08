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
        public function contact()
        {
            $data = [];
            $rules = [
                'uname'=> 'required|min_length[3] | max_length[20]',
                'email'=> 'required | valid_email',
                'mobile'=> 'required | exact_length[10] | numeric',
                'msg'=> 'required',
            ];
            if ($this->request->getMethod() == 'post')
            {
                if($this->validate($rules))
                {

                }
                else {
                    $data['validation']= $this->validator;
                }
            }
            return view ('contact_view', $data);
        }
        public function __construct() {
            helper ('form');
        }
        
        
}
