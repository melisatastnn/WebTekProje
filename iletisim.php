<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $adSoyad  = $_POST['adSoyad'];
    $email    = $_POST['email'];
    $tel      = $_POST['tel'];
    $konu     = $_POST['konu'];
    $mesaj    = $_POST['mesaj'];
    $cinsiyet = $_POST['cinsiyet'];

    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Form Sonucu | Melisa Taştan</title>
        <link rel='stylesheet' href='style.css'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <style>
            body {
                background-color: #fce4ec !important;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }
            .result-container {
                background: white;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                width: 100%;
                max-width: 600px;
                border-top: 8px solid #ad1457;
            }
            .result-header {
                color: #ad1457;
                font-weight: bold;
                text-align: center;
                margin-bottom: 30px;
                border-bottom: 2px solid #fce4ec;
                padding-bottom: 15px;
            }
            .info-row {
                display: flex;
                margin-bottom: 15px;
                padding: 10px;
                border-radius: 8px;
                background-color: #fff8fa;
            }
            .info-label {
                font-weight: bold;
                color: #ad1457;
                width: 140px;
                flex-shrink: 0;
            }
            .info-value {
                color: #333;
                word-break: break-word;
            }
            .btn-custom {
                background-color: #ad1457 !important;
                color: white !important;
                border: none !important;
                padding: 12px 30px !important;
                font-weight: bold !important;
                border-radius: 10px !important;
                transition: 0.3s !important;
                text-decoration: none;
                display: inline-block;
            }
            .btn-custom:hover {
                background-color: #880e4f !important;
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class='result-container'>
            <div style='background-color: #e8f5e9; color: #2e7d32; padding: 10px; border-radius: 8px; text-align: center; margin-bottom: 20px; font-weight: bold; border: 1px solid #c8e6c9;'>
                ✓ Başarıyla iletildi!
            </div>

            <h2 class='result-header'>Gönderilen Form Bilgileri</h2>
            
            <div class='info-row'>
                <div class='info-label'>Ad Soyad:</div>
                <div class='info-value'>" . htmlspecialchars($adSoyad) . "</div>
            </div>

            <div class='info-row'>
                <div class='info-label'>E-Mail:</div>
                <div class='info-value'>" . htmlspecialchars($email) . "</div>
            </div>

            <div class='info-row'>
                <div class='info-label'>Telefon:</div>
                <div class='info-value'>" . htmlspecialchars($tel) . "</div>
            </div>

            <div class='info-row'>
                <div class='info-label'>Cinsiyet:</div>
                <div class='info-value'>" . htmlspecialchars($cinsiyet) . "</div>
            </div>

            <div class='info-row'>
                <div class='info-label'>Konu:</div>
                <div class='info-value'>" . htmlspecialchars($konu) . "</div>
            </div>

            <div class='info-row' style='flex-direction: column;'>
                <div class='info-label' style='width: 100%; margin-bottom: 5px;'>Mesaj:</div>
                <div class='info-value'>" . nl2br(htmlspecialchars($mesaj)) . "</div>
            </div>

            <div class='text-center mt-4'>
                <a href='iletisim.html' class='btn-custom'>Geri Dön</a>
            </div>
        </div>
    </body>
    </html>";
} else {
    echo "Lütfen formu doldurarak erişiniz.";
}
?>