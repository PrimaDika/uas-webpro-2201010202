<?php
include "dbcon.php";
$sql = "DELETE FROM `peminjaman` WHERE kd_peminjaman ='" . $_GET['kd_peminjaman'] . "';";
$result = mysqli_query($conn, $sql);
if ($result){
    header("location: ../index.php");
} else {
    echo "gagal";
}
?>