<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['nama_produk', 'deskripsi', 'harga', 'kategori', 'gambar']; // Kolom yang diizinkan untuk operasi insert/update
}