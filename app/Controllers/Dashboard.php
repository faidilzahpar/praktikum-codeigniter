<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // Instansiasi model
        $productModel = new ProductModel();

        // Ambil data dari database
        $data['products'] = $productModel->findAll();

        // Kirim data ke view
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view('dashboard', $data); // Kirim data ke view dashboard
        echo view('templates/footer');
    }
}