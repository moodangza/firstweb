<?php 
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('spicweb');
    }

    public function view($page = 'home')
    {
        return view('home');
    }
}
?>