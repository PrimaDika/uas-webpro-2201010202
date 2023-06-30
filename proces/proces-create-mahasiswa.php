<?php

include "dbcon.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tipeKelas = $_POST['tipe-kelas'];
$jurusan = $_POST['jurusan'];
$jenisKelamin = $_POST['jenis-kelamin'];

$sql = "INSERT INTO `mahasiswa` (nim, nama, tipe_kelas, jurusan, jenis_kelamin) VALUES ($nim, '$nama', '$tipeKelas', '$jurusan', '$jenisKelamin')";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../index-mahasiswa.php");
    exit;
}else{
    echo("gagal");
}

?>