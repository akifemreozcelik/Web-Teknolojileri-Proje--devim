<?php
$kullanici = "b241210372@sakarya.edu.tr";
$sifre = "b241210372";

if ($_POST["email"] == $kullanici && $_POST["password"] == $sifre) {
    $username = explode('@', $_POST["email"])[0];
    echo "<h2>Hoşgeldiniz $username</h2>";
} else {
    echo "<script>
            alert('Kullanıcı adı veya şifre hatalı!');
            window.location.href='login.html';
          </script>";
}
?>
