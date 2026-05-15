<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['useremail'];
    $sifre = $_POST['password'];

    $dogruEmail = "melisa.tastan@ogr.sakarya.edu.tr"; 
    $dogruSifre = "b251210109";

    if ($email == $dogruEmail && $sifre == $dogruSifre) {
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <title>Hoş geldiniz</title>
            <style>
                body { background-color: #fce4ec; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
                .welcome-card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; border-top: 5px solid #ad1457; }
                h1 { color: #ad1457; }
                p { color: #333; font-size: 18px; }
                .btn-home { display: inline-block; margin-top: 20px; background-color: #ad1457; color: white; padding: 10px 25px; text-decoration: none; border-radius: 8px; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class='welcome-card'>
                <h1>Hoş geldiniz " . $dogruSifre . "</h1>
                <p>Giriş işleminiz başarıyla tamamlandı.</p>
                <a href='index.html' class='btn-home'>Ana Sayfaya Dön</a>
            </div>
        </body>
        </html>";
    } else {
        $hataMesaji = "Kullanıcı adı veya şifre hatalı!";
        echo "<script>
                alert('$hataMesaji');
                window.location.href = 'login.html';
              </script>";
    }
}
?>