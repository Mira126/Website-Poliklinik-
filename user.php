<?php
session_start();
include('koneksi.php');

// Pastikan pengguna sudah login
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Ambil daftar dokter dari database (asumsikan Anda memiliki tabel 'doctors' dengan kolom 'id', 'name', dan 'specialization')
$sql_doctors = "SELECT id, name, specialization FROM doctors";
$result_doctors = $conn->query($sql_doctors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengguna Biasa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url(hom.jpeg) no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            
            height: 100vh;
            color: #333;
        }

        h2 {
            text-align: center;
            font-size: 24px;
        }

        h3 {
            text-align: center;
            font-size: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 80%;
            animation: fadeIn 1s ease-in-out;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #2980b9;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        footer {
            background-color: blue;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            marquee-direction: left;
            marquee-speed: normal;
        }
    </style>
</head>
<body>
    <h3>Registrasi Janji Temu Anda</h3>
    <form action="process_appointment.php" method="post">
        <label for="nik">NIK:</label>
        <input type="text" name="nik" required>

        <label for="name">Nama:</label>
        <input type="text" name="name" required>

        <label for="birthdate">Tanggal Lahir:</label>
        <input type="date" name="birthdate" required>

        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="doctor">Pilih Dokter:</label>
        <select name="doctor" required>
            <?php
            while ($row_doctor = $result_doctors->fetch_assoc()) {
                echo "<option value='{$row_doctor['id']}'>{$row_doctor['name']} ({$row_doctor['specialization']})</option>";
            }
            ?>
        </select>

        <label for="appointment_date">Tanggal Janji Temu:</label>
        <input type="date" name="appointment_date" required>

        <label for="appointment_time">Jam Janji Temu:</label>
        <input type="time" name="appointment_time" required>

        <input type="submit" value="Daftar Janji Temu">
    </form>
    <a href="logout.php">Logout</a>
    <footer>
        <marquee behavior="scroll" direction="left">@pengembangan/WEB/2024/fendi</marquee>
    </footer>
</body>
</html>
