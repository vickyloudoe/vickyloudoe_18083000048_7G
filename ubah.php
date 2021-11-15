<?php
// session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

include "koneksi.php";

$id = $_GET["id"];

$spt = mysqli_query($conn,"SELECT * FROM sepatu WHERE id = '$id'");

$data=mysqli_fetch_array($spt);


if( isset($_POST["submit"]) ) {
    
        
    if($spt) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";    
    } else {
        echo"
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>
            ";
        }

    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Barang</title>
</head>
<body>
    <h1>Ubah Data Barang</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?=$data['nama']?>"> 
            </li>
            <li>
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" value="<?=$data['warna']?>">
            </li>
            <li>
                <label for="ukuran">Ukuran :</label>
                <input type="text" name="ukuran" id="ukuran" value="<?=$data['ukuran']?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" value="<?=$data['harga']?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>
