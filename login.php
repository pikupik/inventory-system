<?php
require 'db_connect.php';

// Fungsi login
function login($email, $password) {
    global $conn;

    // Melindungi dari serangan SQL Injection
    $username = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Mengecek keberadaan pengguna dalam database
    $query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        // Pengguna ditemukan, login berhasil
        return header("Location: home.php");
    } else {
        // Pengguna tidak ditemukan, login gagal
        return false;
    }
}

// Contoh penggunaan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (login($email, $password)) {
        echo "Login berhasil!";
        return header("Location: home.php");
    } else {
        echo "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>IMS Login - Inventory Managament System</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
<body>
  <div class="header">
    <h1>IMS</h1>
    <p>Inventory Management System</p>
  </div>
 <div class="container">
        <h2>Login Page</h2>
        
        <form method="POST" action="login.php">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
        
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        
            <button type="submit">Login</button>
            <button type="register" onclick="goToNextPage()">Register</button>
        </form>
    </div>
<script src="javascript/login.js"></script>
</body>
</html>