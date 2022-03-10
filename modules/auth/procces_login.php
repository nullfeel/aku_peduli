<?php


if (isset($_POST['nik'], $_POST['nama_lengkap'])) {
    $nik        = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $format = "$nik|$nama_lengkap";
    $file = file('../database/config.txt',FILE_IGNORE_NEW_LINES);
    if(in_array($format, $file)){
        
        if ($nik == "admin") {
            echo 'Selamat datang admin';
            echo '<meta http-equiv="refresh" content="0;url=index.php?url=admin_dashboard" />';
            session_start();
            $_SESSION['nik'] = $nik;
            $_SESSION['nama_lengkap'] = $nama_lengkap;
            $_SESSION['admin'] = true;
        }
        else {
            echo 'Login sukses';
            echo '<meta http-equiv="refresh" content="0;url=index.php?url=" />';
            session_start();
            $_SESSION['nik'] = $nik;
            $_SESSION['nama_lengkap'] = $nama_lengkap;
            $_SESSION['admin'] = false;
            session_start();
            $nik        = $_SESSION['nik'];
            $nama_lengkap = $_SESSION['nama_lengkap'];
            $waktu = gmdate("l jS \of F Y h:i:s A",);

            $format = "\n$nik|$nama_lengkap|$waktu";

            //kita buka file config.txt
            $file = fopen('../database/log.txt','a');
            fwrite($file, $format);

            //tutup file config
            fclose($file);
        }
    }
    else { //jika data tidak ditemukan 
        $resp =  "Gagal login nik / nama lengkap tidak di temukan";
    }
}

?>