<?php

include "dbcon.php";

$kdPeminjaman = $_POST['kd_peminjaman'];
$buku = $_POST['buku'];
$mahasiswa = $_POST['mahasiswa'];
$startDate = $_POST['tanggal_mulai'];
$endDate = $_POST['tanggal_akhir'];

$sql = "INSERT INTO `peminjaman` (kd_peminjaman, kd_buku, nim, starting_date, end_date) VALUES ('$kdPeminjaman', '$buku', $mahasiswa, '$startDate', '$endDate')";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../index.php");
    exit;
}else{
    echo("gagal");
}

?>