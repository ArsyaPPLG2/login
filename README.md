<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gantilah ini dengan logika autentikasi yang sesuai
    $username = "username_anda";
    $password = "password_anda";

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
<Doctype html>
<html>
<head>
     <title>Form Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="proses_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
