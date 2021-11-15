<?php
// session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

include "koneksi.php";
$id = $_GET['id'];

$query="DELETE FROM sepatu WHERE id='$id'";


if($conn->query($query)===true) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}

?>


