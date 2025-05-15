<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>İletişim Formu Sonuç</title>
</head>
<body>
  <h2>Formdan Gelen Bilgiler</h2>

  <p><strong>Ad Soyad:</strong> <?php echo htmlspecialchars($_POST['adsoyad']); ?></p>
  <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
  <p><strong>Telefon:</strong> <?php echo htmlspecialchars($_POST['telefon']); ?></p>
  <p><strong>Konu:</strong> <?php echo htmlspecialchars($_POST['konu']); ?></p>
  <p><strong>Mesaj:</strong><br> <?php echo nl2br(htmlspecialchars($_POST['mesaj'])); ?></p>

</body>
</html>
