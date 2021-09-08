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
class Downloads extends Controller{
    public function index()
    {
        return view('/downloads/downloads_view');
    }
    public function EnglishGrammar()
    {
        return view('downloads/englishgrammar_view');
    }
    public function SpokenEnglish()
    {
        return view('downloads/spokenenglish_view');
    }
    public function PartsOfSpeech()
    {
        return view('downloads/partsofspeech_view');
    }
    public function Vocabulary()
    {
        return view('downloads/vocabulary_view');
    }
    public function Translation()
    {
        return view('downloads/translation_view');
    }
    public function ObjectiveEnglish()
    {
        return view('downloads/objectiveenglish_view');
    }
    public function InterviewQandA()
    {
        return view('downloads/interview_view');
    }
    public function Essays()
    {
        return view('downloads/essays_view');
    }
    
}
