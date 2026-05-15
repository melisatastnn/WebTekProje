<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $adSoyad = $_POST['adSoyad'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'];
    $cinsiyet = $_POST['cinsiyet'];

 
    echo "<div style='font-family: Arial; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;'>";
    echo "<h2 style='color: #ad1457; text-align: center;'>Gönderilen Form Bilgileri</h2>";
    echo "<hr>";
    echo "<p><b>Ad Soyad:</b> " . htmlspecialchars($adSoyad) . "</p>";
    echo "<p><b>E-Mail:</b> " . htmlspecialchars($email) . "</p>";
    echo "<p><b>Telefon:</b> " . htmlspecialchars($tel) . "</p>";
    echo "<p><b>Cinsiyet:</b> " . htmlspecialchars($cinsiyet) . "</p>";
    echo "<p><b>Konu:</b> " . htmlspecialchars($konu) . "</p>";
    echo "<p><b>Mesaj:</b> " . nl2br(htmlspecialchars($mesaj)) . "</p>";
    echo "<hr>";
    echo "<div style='text-align: center;'><a href='iletisim.html' style='text-decoration: none; color: white; background: #ad1457; padding: 10px 20px; border-radius: 5px;'>Geri Dön</a></div>";
    echo "</div>";
}
?>