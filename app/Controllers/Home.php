<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db     = \Config\Database::connect();
        $q = "SELECT a.*,b.nama as nama_kategori FROM produk a LEFT JOIN kategori b ON a.id_kategori = b.id";
		$query 	= $db->query($q);
		$row 	= $query->getResult();
		return view('home/home',compact('row'));
    }
}
