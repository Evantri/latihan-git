<?php

namespace App\Controllers;

use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang,  selamat belajar Web Programming";
    }
    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1();
        $hasil = $model->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }
    public function penjumlahan_1($n1, $n2)
    {
        $model_latihan1 = new Model_latihan1();
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $model_latihan1->jumlah($n1, $n2);
        return view('view-latihan', $data);
    }
}