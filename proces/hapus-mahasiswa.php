<?php
include "dbcon.php";
$sql = "DELETE FROM `mahasiswa` WHERE nim ='" . $_GET['nim'] . "';";
$result = mysqli_query($conn, $sql);
if ($result){
    header("location: ../index-mahasiswa.php");
} else {
    echo "gagal";
}
?>