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
class Services extends Controller{
    public function index()
    {
        return view('/services/services_view');
    }
}
