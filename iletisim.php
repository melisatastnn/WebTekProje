<?php
header('Content-Type: text/html; charset=utf-8');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $ad = $_POST['adSoyad'];
    $email = $_POST['email'];
    $telefon = $_POST['tel'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'];

 
    echo "<h2>Gönderilen Form Bilgileri</h2>";
    echo "<hr>";
    echo "<b>Ýsim Soyisim:</b> " . $ad . "<br>";
    echo "<b>E-Mail:</b> " . $email . "<br>";
    echo "<b>Telefon:</b> " . $telefon . "<br>";
    echo "<b>Konu:</b> " . $konu . "<br>";
    echo "<b>Mesaj:</b> " . $mesaj . "<br>";
    echo "<br><a href='iletisim.html'>Geri Dön</a>";
}
?>