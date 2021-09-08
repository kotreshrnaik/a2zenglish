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
class Socialmedia extends Controller{
    public function index()
    {
        return view('socialmedia/socialmedia_view');
    }
    public function Youtube()
    {
        return view('socialmedia/youtube_view');
    }
    public function FacebookPage()
    {
        return view('socialmedia/facebookpage_view');
    }
    public function Instagram()
    {
        return view('socialmedia/instagram_view');
    }
    public function Spotify()
    {
        return view('socialmedia/spotify_view');
    }
}
