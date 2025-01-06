<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view('dashboard');
        echo view('templates/footer');
    }
}
