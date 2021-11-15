<?php
 session_start();

include 'koneksi.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $kata_sandi = $_POST["kata_sandi"];
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' and kata_sandi='$kata_sandi'");
    $cek= mysqli_num_rows($query);
    

        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true;
            header("location: index.php");
        }
        else{
            echo "
                <script>
                    alert('gagal login');
                    document.location.href = 'login.php';
                </script>
            ";    
        }
    
    
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Halaman Login</h1>

        <h3>
            <a href="registrasi.php">Registrasi</a>
        </h3>
        
            
        
<?php if( isset($eror) ) : ?>
    <p style="color: red; font-style: italic;>">username / password salah</p>
    <?php endif; ?>

<link rel="stylesheet" href="style.css">
<form action="" method="post">
    <ul>
        <br>
        <br>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="kata_sandi">Password :</label>
        <input type="text" name="kata_sandi" id="kata_sandi">
        <br>
        <br>
        <button type="submit" name="login">Login</button>
        <br>
        <br>
    </ul>
    
</form>


    
</body>
</html>