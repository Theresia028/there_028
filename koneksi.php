<?php
$host = "localhost";
$user = "root";
$password ="";
$dbname = "db_there";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}

?>