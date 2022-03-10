<?php
$datalog = file('../database/log.txt', FILE_IGNORE_NEW_LINES);
$user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
$loginfo = array();
$totallogin = 0;

    if(file_exists('../database/log.txt')) {
        foreach($datalog as $loglist) {
            $logpecah = explode("|", $loglist);
            @$keylog = $logpecah['0']."|".$logpecah['1'];
            if ($keylog == $user) {
                array_push($loginfo, $logpecah['2']);
                $totallogin++;
            }
        }
    }else die("File log tidak ada!");

@$lastlog = array_values(array_slice($loginfo, -1))[0];

function showLogInfo($log) {
    foreach ($log as $data) {
         echo("Login on $data" . '<br>');
    }
}

function showLogInfoall($log) {
    foreach(file($log) as $line) {
        echo $line. "\n";
     } 
}
?>