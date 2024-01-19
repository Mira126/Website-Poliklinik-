<?php
session_start();
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Password cocok
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header('Location: admin.php');
            } else {
                // Redirect ke halaman pengguna biasa setelah login
                header('Location: user.php');
            }
        } else {
            echo "Password salah. <a href='login.php'>Coba lagi</a>.";
        }
    } else {
        echo "Username tidak ditemukan. <a href='register.php'>Registrasi</a>.";
    }
}

$conn->close();
?>