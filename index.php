<?php
// session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

include "koneksi.php";
$sepatu = mysqli_query($conn,"SELECT * FROM sepatu");

//if( isset($_POST["cari"]) ) {
    //$jaket = cari($_POST["keyword"];)
//}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>

<body>
    <style>
        body {background-color: #bfff80
        }
    </style>

<a href="logout.php">Logout</a>

<h1>Daftar Barang</h1>
<style>
    
    h1 { text-align: center;
        color: #2979ff;

    }
</style>


<a href="tambah.php">Tambah Data Barang</a>
<br><br>

<form action="" methode="post">
    <input type="text" name="keyword" size="40" autofocus
    placeholder="Masukan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Warna</th>
        <th>Ukuran</th>
        <th>Harga</th>
    </tr>
<style>
    table {
        background-color: #b3d9ff;
    }
</style>
    
    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_array($sepatu))
{?>
<tr>
<td><?= $i; ?></td>
<td>
    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('yakin?');">hapus</a>
    </td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["warna"]; ?></td>
        <td><?= $row["ukuran"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>        
<?php 
}
?>
    <?php $i++; ?>
    

</table>

</body>
</html>
