<?php
require 'db_connect.php';

// Fungsi untuk menghash password menggunakan bcrypt
function hashPassword($password)
{
    $hash = password_hash($password, PASSWORD_BCRYPT);
    return $hash;
}

// Fungsi untuk memverifikasi password
function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

// Fungsi untuk mendapatkan data pengguna berdasarkan username
function getUserByEmail($email)
{
    global $conn;

    $query = "SELECT * FROM register WHERE email = '$email'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    return $user;
}

// Fungsi untuk melakukan login
function login($email, $password)
{
    $email = getUserByEmail($email);

    // Periksa apakah pengguna ditemukan
    if ($email) {
        $hashedPassword = $email['password'];
        $isPasswordCorrect = verifyPassword($password, $hashedPassword);

        // Periksa apakah password cocok
        if ($isPasswordCorrect) {
            echo "Password cocok. Berhasil login!";
            
            return header("Location: home.php");
        } else {
            echo "Password tidak cocok. Login gagal!";
        }
    } else {
        echo "Pengguna tidak ditemukan.";
    }
}
?>
