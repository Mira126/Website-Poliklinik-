<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url(hom.jpeg) no-repeat;
        }

        nav {
            background-color: #f2f2f2;
            padding: 10px;
            display: flex;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #ddd;
        }

        section {
            margin-top: 50px;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        p {
            color: #000;
            font-size: 1.2em;
        }

        section:hover h1 {
            color: #007bff;
        }

        footer {
            background-color: blue;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            color: #fff;
            font-size: 24px;
            text-decoration: none;
        }

        .map-container {
            margin-top: 20px;
        }

        .map-container iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }
    </style>
</head>
<body>
    <nav>
        <a href="beranda.php">Beranda</a>
        <a href="tentang.php">Tentang Kami</a>
        <a href="login.php">Login</a>
    </nav>

    <section>
        <h1>Selamat datang di POLIKLINIK</h1>
        <p><b>Ini adalah halaman beranda situs web kami. Silakan melakukan antrian.</b></p>
    </section>

    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com/" target="_blank">Facebook</a>
            <a href="https://twitter.com/" target="_blank">Twitter</a>
            <a href="https://www.instagram.com/" target="_blank">Instagram</a>
        </div>

        <div class="map-container">
            <!-- Ganti URL iframe dengan URL peta (maps) yang sesuai -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393.16713088763174!2d120.2693609202355!3d-9.65619794460741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c9b6879452c3d%3A0x10556fc51ca3329e!2sKlinik%20Pratama%20Caesar%20Medika!5e0!3m2!1sid!2sid!4v1705633272425!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>
        <marquee behavior="scroll" direction="left">@pengembangan/WEB/2024/fendi</marquee>
    </footer>
</body>
</html>
