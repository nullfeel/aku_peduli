<?php
$linecount = 0;
$data = file('../database/catatan.txt', FILE_IGNORE_NEW_LINES);
$user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];

foreach ($data as $value) {
  $pecah = explode("|", $value);
  @$key = $pecah['0']."|".$pecah['1'];
  if ($key == $user) {
    $linecount++;
  }
}


?>