<?php
session_start();
$nik        = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$jam     = $_POST['jam'];
$lokasi  = $_POST['lokasi'];
$suhu    = $_POST['suhu'];
$catatan = $_POST['catatan'];

$format = "\n$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu|$catatan";

//kita buka file config.txt
$file = fopen('../../database/catatan.txt','a');
fwrite($file, $format);

//tutup file config
fclose($file);

?>
<script type="text/javascript">
    alert('Data Catatan Perjalanan Sudah Tersimpan.');
    window.location.assign('../../dashboard/index.php?url=');
</script>