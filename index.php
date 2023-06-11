<?php
	session_start();

	// Periksa apakah session username sudah di-set
	if (!isset($_SESSION['username'])) {
		// Redirect kembali ke halaman login
		header('Location: login.php');
		exit();
	}

	if(!isset($_GET['page'])){
		header("Location: index.php?page=welcome");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PEMROGRAMAN WEB - SI</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->


<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- Tampilkan Menu Bar -->
		<?php include("menu_atas.php");?>
	</nav>

	<div class="container col-md-6 mt-4">	
		<div id="isi-content">
			<!-- Load halaman per page di sini -->
			<?php
				if(isset($_GET['page'])){
					$title = $_GET['page'];
				
					// Validasi nilai $title
					$allowedPages = ['welcome', 'produk', 'user']; // Daftar halaman yang diizinkan
				
					if(in_array($title, $allowedPages)){
						$filename = $title . ".php";
				
						// Pastikan file ada sebelum memasukkan
						if(file_exists($filename)){
							include($filename);
						} else {
							echo "Halaman tidak ditemukan";
						}
					} else {
						echo "Halaman tidak valid";
					}
				}
				
			?>
		</div>
	</div>


</body>
</html>