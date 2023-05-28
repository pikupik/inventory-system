<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah form login telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan input dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kecocokan username dan password di database
    $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Memeriksa hasil query
    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        echo "Login berhasil. Selamat datang, " . $username;
        // Lanjutkan ke halaman lain atau lakukan tindakan lain yang diperlukan
    } else {
        // Login gagal
        echo "Username atau password salah.";
    }
}

// Tutup koneksi
mysqli_close($conn);
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
        
        <form action="/login" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
        
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        
            <button type="submit">Login</button>
            <button type="register">Register</button>
        </form>
    </div>
<script src="login.js"></script>
</body>
</html>