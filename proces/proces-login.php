<?php
// session_start();
include "dbcon.php";
$user = $_POST['username'];
$pass =$_POST['password'];
$sql = "SELECT * FROM pengguna WHERE username='$user' and pass='$pass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1){
    // alert
    $_SESSION['alert'] = 'berhasil';
    // for acces all admin page
    $_SESSION['status'] = 'berhasil';

    header("location: ../index.php");
    exit();
}else{
    $_SESSION['alert'] = 'gagal';

    header("location: ../login.php");
    exit();
}

?>