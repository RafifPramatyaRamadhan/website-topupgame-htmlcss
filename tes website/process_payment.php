<?php
// Validasi dan sanitasi data masukan
$game_name = isset($_POST['game_name']) ? htmlspecialchars($_POST['game_name']) : '';
$amount = isset($_POST['amount']) ? intval($_POST['amount']) : 0;
$username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
$payment_method = isset($_POST['payment_method']) ? htmlspecialchars($_POST['payment_method']) : '';
$user_id = isset($_POST['user_id']) ? htmlspecialchars($_POST['user_id']) : '';

// Validasi (pastikan semua kolom yang diperlukan diisi)
if ( $amount <= 0 || empty($username) || empty($payment_method) || empty($user_id)) {
    die("Nama game, jumlah, nama pengguna, metode pembayaran, dan ID pengguna harus diisi dengan benar.");
}

// Koneksi ke database (gantilah dengan detail koneksi database Anda)
$conn = new mysqli('localhost', 'root', '', 'game_store');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Persiapkan pernyataan SQL untuk menyimpan data pembayaran ke dalam tabel
$stmt_payment = $conn->prepare("INSERT INTO payments (game_name, amount, username, user_id, payment_method) VALUES (?, ?, ?, ?, ?)");

// Bind parameter dan eksekusi kueri
$stmt_payment->bind_param("sisss", $game_name, $amount, $username, $user_id, $payment_method);

if ($stmt_payment->execute()) {
    echo "Pembayaran berhasil untuk game $game_name dengan jumlah $amount via $payment_method";
} else {
    echo "Error: " . $stmt_payment->error;
}

// Tutup pernyataan dan koneksi
$stmt_payment->close();
$conn->close();
?>
