<?php

include "dbcon.php";

$kdPeminjaman = $_POST['kd_peminjaman'];
$buku = $_POST['buku'];
$mahasiswa = $_POST['mahasiswa'];
$startDate = $_POST['tanggal_mulai'];
$endDate = $_POST['tanggal_akhir'];

$sql = "UPDATE `peminjaman` SET kd_buku = '$buku', nim = $mahasiswa, starting_date = '$startDate', end_date = '$endDate' WHERE kd_peminjaman = '$kdPeminjaman'";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: ../index.php");
    exit;
}else{
    echo("gagal");
}

?>
