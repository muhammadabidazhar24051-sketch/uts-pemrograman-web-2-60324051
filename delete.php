<?php
require_once 'config/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    header("Location: index.php?pesan=error");
    exit;
}

// cek dulu datanya ada atau tidak 
$cek = $conn->prepare("SELECT id_kategori FROM kategori WHERE id_kategori = ?");
$cek->bind_param("i", $id);
$cek->execute();
$cek->store_result();

if ($cek->num_rows == 0) {
    $cek->close();
    header("Location: index.php?pesan=error");
    exit;
}
$cek->close();

// lanjut proses delete jika datanya ada
$stmt = $conn->prepare("DELETE FROM kategori WHERE id_kategori = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

// memastikan benar benar terhaapus
if ($stmt->affected_rows > 0) {
    $stmt->close();
    header("Location: index.php?pesan=hapus");
    exit;
} else {
    $stmt->close();
    header("Location: index.php?pesan=error");
    exit;
}
?>