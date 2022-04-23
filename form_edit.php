<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data There</title>
</head>
<body>
<?php
include 'koneksi.php';
$id=$_GET['id'];
$sql ="SELECT * FROM tbl_028 WHERE id_028=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query Salah";

}
?>

<h1>Form Tambah Data There</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
    
?>
    <form method="post" action="update_there.php">
        <input type="hidden" name="id" value="<?php echo $row['id_028']?>">
        Nama  : <input type="text" name="nama_028" value="<?php echo $row['nama_028']?>"><br/>
        Email : <input type="text" name="email_028" value="<?php echo $row['email_028']?>"><br/>
        <button type="submit">Update</button> 
    </form> 
<?php }?>
</body>
</html>

