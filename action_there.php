<?php
include "koneksi.php";

$nama = $_POST['nama_028'];
$email = $_POST['email_028'];

$sql = "INSERT INTO tbl_028 VALUES(null,'$nama','$email')";
$hasil =mysqli_query($koneksi, $sql); 
if (!$hasil){
    echo "Eksekusi tambah data There Gagal";
}else{
    echo "Eksekusi tambah data There Berhasil<br>";
    echo "<a href='data_there.php'>Show data</a>";
}

?>