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
class Onlinecourses extends Controller{
    public function index()
    {
        return view('home_view');
    }
    public function SpellingAndBasicEnglishCourse()
    {
        return view('onlinecourses/spellingandbasicenglishcourse_view');
    }
    public function EnglishGrammarCourse()
    {
        return view('onlinecourses/englishgrammarcourse_view');
    }
    public function SpokenEnglishCourse()
    {
        return view('onlinecourses/spokenenglishcourse_view');
    }
    public function TranslationCourse()
    {
        return view('onlinecourses/translationcourse_view');
    }
    public function CursiveHandwritingCourse()
    {
        return view('onlinecourses/cursivehandwritingcourse_view');
    }
    public function ObjectiveEnglishCourse()
    {
        return view('onlinecourses/objectiveenglishcourse_view');
    }
    public function JobsSkillsTrainingCourse()
    {
        return view('onlinecourses/jobsskillstrainingcourse_view');
    }
    public function EssayWritingCourse()
    {
        return view('onlinecourses/essaywritingcourse_view');
    }
    public function BuildYourVocabularyCourse()
    {
        return view('onlinecourses/buildyourvocabularycourse_view');
    }
    public function PrecisWritingCourse()
    {
        return view('onlinecourses/preciswritingcourse_view');
    }
    
}