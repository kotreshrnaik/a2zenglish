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
class Blogs extends Controller{
    public function index()
    {
        return view('home_view');
    }
    public function EnglishGrammar()
    {
        return view('blogs/englishgrammar_view');
    }
    public function SpokenEnglish()
    {
        return view('blogs/spokenenglish_view');
    }
    public function PartsOfSpeech()
    {
        return view('blogs/partsofspeech_view');
    }
    public function Vocabulary()
    {
        return view('blogs/vocabulary_view');
    }
    public function Translation()
    {
        return view('blogs/translation_view');
    }
    public function ObjectiveEnglish()
    {
        return view('blogs/objectiveenglish_view');
    }
    public function InterviewQandA()
    {
        return view('blogs/interview_view');
    }
    public function Essays()
    {
        return view('blogs/essays_view');
    }
    
}
