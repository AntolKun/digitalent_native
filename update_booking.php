<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $tanggal = $_POST['tanggal'];
    $durasi = $_POST['durasi'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $smoking_room = isset($_POST['smoking_room']) ? 1 : 0;
    $breakfast = isset($_POST['breakfast']) ? 1 : 0;
    $jumlah_tagihan = ($tipe_kamar + ($smoking_room ? 200000 : 0) + ($breakfast ? 100000 : 0)) * $durasi;

    // Update the booking in the database
    $stmt = $conn->prepare("UPDATE bookings SET nama = ?, notelp = ?, tanggal = ?, durasi = ?, tipe_kamar = ?, smoking_room = ?, breakfast = ?, jumlah_tagihan = ? WHERE id = ?");
    $stmt->bind_param("sssisiiii", $nama, $notelp, $tanggal, $durasi, $tipe_kamar, $smoking_room, $breakfast, $jumlah_tagihan, $id);

    if ($stmt->execute()) {
        // Tampilkan alert booking sukses
        echo '<script>alert("Booking Sukses!");</script>';
        // Redirect (refresh) halaman pesan.php
        echo '<script>window.location.href = "riwayat.php";</script>';
        exit; // Exit script agar tidak menjalankan kode di bawahnya
    } else {
        echo "Error updating booking: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
