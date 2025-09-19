<?php 

namespace App\Controllers;

 class Page extends Basecontroller
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/home');
        echo view('layout/footer');
    }
}
?>