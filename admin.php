<?php
session_start();

// Pastikan hanya admin yang dapat mengakses halaman ini
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

include('koneksi.php');

// Query untuk mendapatkan daftar janji temu
$sql_appointments = "SELECT * FROM appointments";
$result_appointments = $conn->query($sql_appointments);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url(hom.jpeg)no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: white;
            margin-bottom: 0;
            transition: color 0.3s ease;
        }

        h3 {
            text-align: center;
            color: white;
            margin-bottom: 10px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: lightblue;
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

        table, a {
            animation: fadeIn 1s ease-in-out;
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
    <h2><b>Selamat datang, Admin!</b></h2>
    <h3>Daftar Janji Temu</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Dokter</th>
            <th>Tanggal Janji Temu</th>
            <th>Jam Janji Temu</th>
            <th>Status</th>
        </tr>
        <?php
        while ($row = $result_appointments->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['user_id']}</td>
                    <td>{$row['nik']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['birthdate']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['doctor_id']}</td>
                    <td>{$row['appointment_date']}</td>
                    <td>{$row['appointment_time']}</td>
                    <td>{$row['status']}</td>
                  </tr>";
        }
        ?>
    </table>
    <a href="history.php">History</a>
    <a href="logout.php">Logout</a>
    <footer>
        <marquee behavior="scroll" direction="left">@pengembangan/WEB/2024/fendi</marquee>
    </footer>
</body>
</html>
