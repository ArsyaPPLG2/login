<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gantilah ini dengan logika autentikasi yang sesuai
    $username = "Ryu_r0";
    $password = "200307";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Periksa apakah username dan password benar
    if ($input_username === $username && $input_password === $password) {
        // Autentikasi berhasil
        echo "Login berhasil. Selamat datang, $username!";
    } else {
        // Autentikasi gagal
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
