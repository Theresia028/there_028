<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql="DELETE FROM tbl_028 WHERE id_028=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data There Gagal";
}else{
    echo "Data There berhasil di delete<br>";
    echo "<a href='data_there.php'>Show data</a>";

}
?>