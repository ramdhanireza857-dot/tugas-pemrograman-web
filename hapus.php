<?php
include 'config.php';

// Ambil id dari URL
$id = $_GET['id'];

// Jalankan query hapus data berdasarkan id
$query = "DELETE FROM prodi WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
