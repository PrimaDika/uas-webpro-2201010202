<?php
include "dbcon.php";
$sql = "DELETE FROM `buku` WHERE id_buku ='" . $_GET['id_buku'] . "';";
$result = mysqli_query($conn, $sql);
if ($result){
    header("location: ../index-buku.php");
} else {
    echo "gagal";
}
?>