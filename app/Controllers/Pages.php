<?php 
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('spicweb/index');
    }

    public function view($page = 'hello')
    {
        return view('spicweb');
    }
}
?>