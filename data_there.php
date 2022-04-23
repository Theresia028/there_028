<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<table width="90%" border=1" collspacing="1">
<a href ="form_there.php">Tambah Data Mahasiswa
    <tr>
        <td>ID There</td> 
        <td>Nama There</td> 
        <td>Email There</td> 
        <td>Action</td> 
    </tr>
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tbl_028";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_028'];?></td>
            <td><?=$row['nama_028'];?></td>
            <td><?=$row['email_028'];?></td>
            <td> 
                <a href ="form_edit.php?id=<?=$row['id_028']?>">Edit
                <a href ="delete_there.php?id=<?=$row['id_028']?>">Delete
            </td>
                      
        </tr>
        <?php }
        ?>
</table>
</body>
</html> 
