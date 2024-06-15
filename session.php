<?php
session_start();

// Inisialisasi session views jika belum ada
if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 1;
} else {
    $_SESSION['views']++;
}

// Inisialisasi session nama jika belum ada (gantikan 'Nama Pengguna' dengan nilai yang sesuai)
if (!isset($_SESSION['nama'])) {
    $_SESSION['nama'] = '';
}

// Tampilkan nilai di session views
echo "Nilai di session views: ", $_SESSION['views'];

// Tampilkan nama dari session nama
echo $_SESSION['nama'];

// Tambahkan link untuk melihat session lagi
echo '<br><a href="main.php">Lihat session</a>';
?>
