<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\ContactModel;

class Home extends Controller
{
        public $ContactModel;
        public function __construct() {
            helper ('form');
            $this->$ContactModel = new ContactModel();
        }
        
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
            $data ['validation'] = null;
            $rules = [
                'uname'=> 'required|min_length[3]|max_length[20]',
                'email'=> 'required|valid_email',
                'mobile'=> 'required|exact_length[10]|numeric',
                'msg'=> 'required',
            ];
            if ($this->request->getMethod() == 'post')
            {
                if($this->validate($rules))
                {
                    $cdate= [
                        'uname'=>$this->request->getVar('uname', FILTER_SANITIZE_STRING),
                        'email'=>$this->request->getVar('email',FILTER_SANITIZE_STRING),
                        'mobile'=>$this->request->getVar('mobile',FILTER_SANITIZE_STRING),
                        'massage'=>$this->request->getVar('msg',FILTER_SANITIZE_STRING),
                    ];
                    $this->$ContactModel->saveData($cdata);
                            
                }
                else {
                    $data['validation']= $this->validator;
                }
            }
            return view ('contact_view', $data);
        }  
}
