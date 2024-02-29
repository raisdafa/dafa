<?php
include 'koneksi.php';
// Sambungkan ke database
$host = "localhost"; // Ganti dengan host database Anda
$user = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "kasir"; // Ganti dengan nama basis data Anda

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password sebelum disimpan

// Query untuk menyimpan data ke database
$query = "INSERT INTO petugas (username, password) VALUES ('$username', '$password')";

// Eksekusi query
if ($conn->query($query) === TRUE) {
    header("location:administrator/index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
