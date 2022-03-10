<?php

if (isset($_POST['nik'], $_POST['nama_lengkap'])) {
    $nik        = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

//cek apakah nik sudah terdaftar atau belum
$data = file("../database/config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $pecah = explode("|", $value);
    if($nik==$pecah['0']){
        $cek = true;
    }
}

if(@$cek) { //jika nik sudah terdaftar 
    $resp = "NIK yang digunakan telah terdaftar";

}else{ //jika data tidak ditemukan
    //buat format penyimpanan ke txt config
    $format = "\n$nik|$nama_lengkap";

    //buka dulu file config.txt
    $file = fopen('../database/config.txt','a');
    fwrite($file, $format);

    //tutup file
    fclose($file);
    
    $resp = "Pendaftaran berhasil dilakukan";
    
 }
}