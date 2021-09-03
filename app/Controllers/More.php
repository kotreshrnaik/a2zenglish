<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;
use CodeIgniter\Controller;
/**
 * Description of DesignSolutions
 *
 * @author Admin
 */
class More extends Controller{
    public function index()
    {
        return view('home_view');
    }
    public function Contact()
    {
        return view('more/contact_view');
    }
    public function EnglishCharts()
    {
        return view('more/englishcharts_view');
    }
    public function StudentsDoubts()
    {
        return view('more/studentsdoubts_view');
    }
    
}
