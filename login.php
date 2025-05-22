<?php
// Basit kullanıcı kontrolü (gerçek projelerde veritabanı kullanılmalıdır)
$dogru_email = "akifemreozcelik@gmail.com";
$dogru_sifre = "123456";

// Formdan gelen verileri al
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Giriş bilgilerini kontrol et
if ($email === $dogru_email && $password === $dogru_sifre) {
    echo "<h2>Giriş Başarılı</h2>";
    echo "<p>Hoş geldiniz, $email!</p>";
    // Burada yönlendirme yapılabilir, örneğin: header("Location: anasayfa.html");
} else {
    echo "<h2>Giriş Başarısız</h2>";
    echo "<p>Hatalı e-posta ya da şifre girdiniz.</p>";
    echo "<a href='login.html'>Tekrar dene</a>";
}
?>

