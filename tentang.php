<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dokter</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        h1, h2, p {
            color: #333;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 0x;
        }

        h2 {
            font-size: 1.5em;
            color: #007BFF;
            margin-top: 0;
            margin-bottom: 0;
        }

        p {
            margin: 5px 0;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .profile-container:hover {
            transform: scale(1.05);
        }

        .profile-container:nth-child(even) {
            background-color: #f9f9f9;
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
        .home-box {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            position: fixed;
            top: 10px;
            left: 10px;
        }

        .home-box:hover {
            transform: scale(1.05);
        }
        .doctor-box {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .doctor-box:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<?php
// Array untuk menyimpan informasi dokter umum

$dokterUmum = array(
    array(
        'nama' => 'dr. Peronika A. Rieuwpassa',
        'spesialisasi' => 'Dokter Umum',
        'email' => 'peronika@gmail.com'
    ),
    array(
        'nama' => 'dr. Crystine Sinatra',
        'spesialisasi' => 'Dokter Umum',
        'email' => 'crystine@gmail.com'
    ),
    array(
        'nama' => 'dr. Jeltsin Andini',
        'spesialisasi' => 'Dokter Umum',
        'email' => 'jltsin@gmail.com'
    )
);

// Informasi dokter gigi
$dokterGigi = array(
    'nama' => 'drg. Reny Werdi Ningrum',
    'spesialisasi' => 'Dokter Gigi',
    'email' => 'sarah.brown@example.com'
);

// Tampilkan informasi dokter umum
echo '<h1>Dokter Umum</h1>';
foreach ($dokterUmum as $dokter) {
    echo '<h2>' . $dokter['nama'] . '</h2>';
    echo '<p><strong>Spesialisasi:</strong> ' . $dokter['spesialisasi'] . '</p>';
    echo '<p><strong>Email:</strong> ' . $dokter['email'] . '</p>';
    echo '<hr>';
}

// Tampilkan informasi dokter gigi
echo '<h1>Dokter Gigi</h1>';
echo '<h2>' . $dokterGigi['nama'] . '</h2>';
echo '<p><strong>Spesialisasi:</strong> ' . $dokterGigi['spesialisasi'] . '</p>';
echo '<p><strong>Email:</strong> ' . $dokterGigi['email'] . '</p>';
?>
 <div class="home-box">
        <a href="beranda.php" style="text-decoration: none; color: #007BFF; font-weight: bold;">Home</a>
    </div>
    <footer>
        <marquee behavior="scroll" direction="left">@pengembangan/WEB/2024/fendi</marquee>
    </footer>
</body>
</html>