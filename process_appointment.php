<?php
session_start();
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $doctor_id = $_POST['doctor'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];

    // Tambahkan logika bisnis sesuai kebutuhan
    $status = 'pending'; // Status awal janji temu

    // Simpan data janji temu ke dalam database
    $sql = "INSERT INTO appointments (user_id, nik, name, birthdate, gender, doctor_id, appointment_date, appointment_time, status)
            VALUES ($user_id, '$nik', '$name', '$birthdate', '$gender', $doctor_id, '$appointment_date', '$appointment_time', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Janji temu berhasil dibuat. Menunggu persetujuan admin.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<a href="logout.php">Logout</a>
