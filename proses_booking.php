<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $tanggal = $_POST['tanggal'];
    $durasi = $_POST['durasi'];
    $tipe_kamar = $_POST['tipe_kamar'];

    // Cek apakah checkbox dicentang atau tidak
    $smoking_room = isset($_POST['smoking_room']) ? 1 : 0;

    $breakfast = isset($_POST['breakfast']) ? 1 : 0;

    // Hitung total
    $totalPackagePrice = $tipe_kamar + ($smoking_room * 200000) + ($breakfast * 100000);
    $totalBill = $totalPackagePrice * $durasi;

    // Data Masuk ke database
    $sql = "INSERT INTO bookings (nama, notelp, tanggal, durasi, tipe_kamar, smoking_room, breakfast, harga_paket, jumlah_tagihan)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Bind parameter inout
    $stmt->bind_param("sssisiiii", $nama, $notelp, $tanggal, $durasi, $tipe_kamar, $smoking_room, $breakfast, $totalPackagePrice, $totalBill);

    if ($stmt->execute()) {
        // Tampilkan alert booking sukses
        echo '<script>alert("Booking Sukses!");</script>';
        // Redirect (refresh) halaman pesan.php
        echo '<script>window.location.href = "pesan.php";</script>';
        exit; // Exit script agar tidak menjalankan kode di bawahnya
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
