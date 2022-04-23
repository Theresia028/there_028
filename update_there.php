<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_028'];
$email = $_POST['email_028'];


$sql = "UPDATE tbl_028 set nama_028 = '$nama', email_028 = '$email' where id_028 = $id";
$hasil =mysqli_query($koneksi, $sql); 
if (!$hasil){
    echo "Eksekusi update data There Gagal";
}else{
    echo "Eksekusi update data There Berhasil<br>";
    echo "<a href='data_there.php'>Show data</a>";
}

?>