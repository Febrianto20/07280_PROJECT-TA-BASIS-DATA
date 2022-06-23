<?php
$kon = mysqli_connect("localhost","root","");
if(!$kon){
    die ("Gagal Koneksi...!");
}

$sql_connect = mysqli_select_db($kon, "db_khs");
if(!$sql_connect){
    die ("gagal connect...!");
}
