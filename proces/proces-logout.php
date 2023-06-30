<?php
session_start();

// Hapus semua data session
session_unset();
// Hapus session dari server
session_destroy();

// Redirect ke halaman login setelah logout
header('Location: ../login.php');
exit();
?>