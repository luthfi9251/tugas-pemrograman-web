<?php
include('koneksi.php');
// Ambil data dari form

$id = $_POST['id'];
$username = $_POST['username'];
$role = $_POST['role'];
$password = $_POST['password'];

$hashedPassword = md5($password);

// Query untuk menyimpan data ke tabel pengguna

$data = mysqli_query($koneksi, "update user set username='$username', role='$role' where id='$id'");

if(mysqli_affected_rows($koneksi) > 0){
    echo "<script>alert('data berhasil diupdate.');window.location='index.php?page=user';</script>";
}else {
    echo "<script>alert('data gagal diupdate.');window.location='index.php?page=user';</script>";
}

?>
