<?php

include "dbcon.php";

$idBuku = $_POST['id_buku'];
$nama = $_POST['nama'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$gambar = $_FILES['gambar'];

// proses pengolahan gambar
$fileName = $gambar['name'];
$fileTmp = $gambar['tmp_name'];

$folder = '../data_file/';
  
$destination = $folder . $fileName;
if(move_uploaded_file($fileTmp, $destination)){
    $escapedIdBuku = $conn->real_escape_string($idBuku);
    $escapedNamaBuku = $conn->real_escape_string($nama);
    $escapedPenulis = $conn->real_escape_string($penulis);
    $escapedPenerbit = $conn->real_escape_string($penerbit);
    $escapedFileName = $conn->real_escape_string($fileName);

    $sql = "INSERT INTO `buku` (id_buku, nama_buku, penulis, penerbit, images) VALUES ('$escapedIdBuku', '$escapedNamaBuku', '$escapedPenulis', '$escapedPenerbit', '$escapedFileName')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: ../index-buku.php");
        exit;
    }else{
        echo("gagal");
    }
}
// akhir dari proses


?>