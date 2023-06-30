<?php

include "dbcon.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tipeKelas = $_POST['tipe-kelas'];
$jurusan = $_POST['jurusan'];
$jenisKelamin = $_POST['jenis-kelamin'];

$sql = "UPDATE `mahasiswa` SET nim = $nim, nama = '$nama', tipe_kelas = '$tipeKelas', jurusan = '$jurusan', jenis_kelamin = '$jenisKelamin' WHERE nim = $nim";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: ../index-mahasiswa.php");
    exit;
}else{
    echo("gagal");
}

?>
