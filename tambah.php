<?php


include "koneksi.php";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
</head>

</head>
<body>
    <style>
        body{
            height: 100vh;
            background-color: grey;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <h1>Tambah Data Barang</h1>
        <style>
            h1 {text-align: center;
                color: #4d4dff;   
            }
        </style>
        <style>
            label {
                color: #ff0000;
                font-size: 20px;
            }
        </style>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
                <br> <br><br>
            </li>
            <li>
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna">
                <br><br><br>
            </li>
            <li>
                <label for="ukuran">Ukuran :</label>
                <input type="text" name="ukuran" id="ukuran">
                <br><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga">
                <br><br><br>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    <?php
    if( isset($_POST["submit"]) ) {

        $nama = $_POST["nama"];
        $warna = $_POST["warna"];
        $ukuran = $_POST["ukuran"];
        $harga = $_POST["harga"];
    
        //query insert data
        $query= mysqli_query ( $conn,"INSERT INTO sepatu (nama, warna, ukuran, harga) VALUES ('$nama', '$warna', '$ukuran', '$harga')");
        
        if($query) {
            echo "
                <script>
                    alert('data berhasil ditambah');
                    document.location.href = 'index.php';
                </script>
            ";    
        } else {
            echo"
                <script>
                    alert('data gagal ditambah');
                    document.location.href = 'tambah.php';
                </script>
                ";
            }
        
    }
    ?>
</body>
</html>
