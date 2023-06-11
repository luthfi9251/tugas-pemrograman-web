<?php
	// session_start();

	// // Periksa apakah session username sudah di-set
	// if (!isset($_SESSION['username'])) {
	// 	// Redirect kembali ke halaman login
	// 	header('Location: login.php');
	// 	exit();
	// }
?>

<h2>Selamat datang, <?php echo strtoupper($_SESSION['username'])." - ".$_SESSION['role']; ?>!</h2><br>	