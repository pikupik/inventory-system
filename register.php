<?php
function registerUser($nama, $email, $password)
{
    // Lakukan validasi data yang diterima dari form
    if (empty($nama) || empty($email) || empty($password)) {
        return "Semua kolom harus diisi.";
    }

    // Lakukan validasi khusus untuk email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email tidak valid.";
    }

    // Lakukan validasi khusus untuk password
    if (strlen($password) < 8) {
        return "Password harus terdiri dari minimal 8 karakter.";
    }

    try {
        // Buat koneksi ke database
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=login"; // Ganti sesuai dengan detail koneksi database Anda
        $username_db = "root"; // Ganti sesuai dengan nama pengguna database Anda
        $password_db = ""; // Ganti sesuai dengan password database Anda

        $dbh = new PDO($dsn, $username_db, $password_db);

        // Set error mode ke exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Lakukan pengecekan duplikasi username atau email di database
        $stmt = $dbh->prepare("SELECT * FROM register WHERE nama = :nama OR email = :email");
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return "Nama atau email sudah digunakan.";
        }

        // Simpan data pengguna ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $dbh->prepare("INSERT INTO register (nama, email, password) VALUES (:nama, :email, :password)");
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        // Registrasi berhasil
 
    } catch (PDOException $e) {
        // Tangani error jika terjadi masalah dalam koneksi atau operasi database
        return "Registrasi gagal: " . $e->getMessage();
    }
}

// Contoh penggunaan function
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($password)) {
        echo "Password harus diisi.";
    } else {
        $result = registerUser($nama, $email, $password);
        echo $result;
    }
}
?>




<!DOCTYPE html>
<html>
  <head>
    <title>IMS Login - Inventory Managament System</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
<body>
  <div class="header">
    <h1>IMS</h1>
    <p>Inventory Management System</p>
  </div>
 <div class="container">
   <form method="POST" action="login.php">
        <h2>Register Page</h2>
            <input type="text" placeholder="Enter Your Name" name="nama" required>
            <input type="text" placeholder="Enter Your Email" name="email" required>
            <input type="password" placeholder="Enter Your Password" name="password" required>
        
            <button type="submit">Register!</button>
        </form>
    </div>
<script src="login.js"></script>
</body>
</html>