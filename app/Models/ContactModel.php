<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Models;
use \CodeIgniter\Model;

// * Description of ContactModel
// *
// * @author Admin
// */
class ContactModel extends Model{
   public function saveData($data){
       $db= \Config\DataBase::connect();
       $bhilder= $db->table('contact');
       $res= $builder->insert($data);
   }
    
   
}
