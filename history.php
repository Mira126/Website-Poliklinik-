<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

include('koneksi.php');
$sql_history = "
    SELECT user_id, COUNT(*) as total_appointments, MAX(id) as last_appointment_id
    FROM appointments
    GROUP BY user_id
";
$result_history = $conn->query($sql_history);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #333;
        }

        h2 {
            color: #007bff;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Riwayat Pendaftaran Janji Temu</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Total Pendaftaran</th>
            <th>Detail Pendaftaran Terakhir</th>
        </tr>
        <?php
        while ($row = $result_history->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['total_appointments']}</td>
                    <td><a href='appointment_detail.php?id={$row['last_appointment_id']}'>Lihat Detail</a></td>
                  </tr>";
        }
        ?>
    </table>

    <a href="admin.php">Kembali ke Halaman Admin</a>
</body>
</html>
