<?php 
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        //  echo('spicweb/header');
        return view('spicweb/index');
    }

    public function view($page = 'hello')
    {
        return view('spicweb/index');
    }
}
?>