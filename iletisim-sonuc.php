<?php
// Hataları göstermek için
error_reporting(E_ALL);
ini_set('display_errors', 1);

// POST verilerini al
$adsoyad = $_POST['adsoyad'] ?? '';
$email = $_POST['email'] ?? '';
$telefon = $_POST['telefon'] ?? '';
$konu = $_POST['konu'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';

// E-posta formatı kontrolü örneği
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h2>Hatalı e-posta adresi girdiniz.</h2>";
    echo "<a href='javascript:history.back()'>Geri dön</a>";
    exit;
}

// Tüm alanlar dolu mu?
if (empty($adsoyad) || empty($email) || empty($telefon) || empty($konu) || empty($mesaj)) {
    echo "<h2>Lütfen tüm alanları doldurun.</h2>";
    echo "<a href='javascript:history.back()'>Geri dön</a>";
    exit;
}

// Başarılı ise ekrana yazdır
echo "<h2>İletişim Formu Gönderildi</h2>";
echo "<p><strong>Ad Soyad:</strong> $adsoyad</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Telefon:</strong> $telefon</p>";
echo "<p><strong>Konu:</strong> $konu</p>";
echo "<p><strong>Mesaj:</strong><br>" . nl2br(htmlspecialchars($mesaj)) . "</p>";
?>

