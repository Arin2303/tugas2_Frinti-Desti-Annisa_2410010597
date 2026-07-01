<?php

$host = 'db';
$user = 'root';
$pass = 'root';
$db = 'my_first_db';

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo "<h1>❌ KONEKSI GAGAL!</h1>";
    echo "Error: " . mysqli_connect_error();
} else {
    echo "<h1>✅ Sukses Terhubung ke Database MySQL!</h1>";
    echo "<h2>Selamat Datang di Proyek PHP Docker.</h2>";
    mysqli_close($conn);
}
