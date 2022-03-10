<?php
$datacatatan = file('../database/catatan.txt', FILE_IGNORE_NEW_LINES);
$user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
$listbaris = array();
$baris = 1;

    if(file_exists('../database/catatan.txt')) {
        foreach($datalog as $loglist) {
            $logpecah = explode("|", $loglist);
            @$keylog = $logpecah['0']."|".$logpecah['1'];
            if ($keylog == $user) {
                array_push($listbaris, $totallogin);
                $baris++;
            }
        }
    }else die("File catatan tidak ada!");
?>