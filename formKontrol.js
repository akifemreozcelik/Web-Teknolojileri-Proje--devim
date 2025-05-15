function formKontrol() {
  const adsoyad = document.querySelector('[name="adsoyad"]').value.trim();
  const email = document.querySelector('[name="email"]').value.trim();
  const telefon = document.querySelector('[name="telefon"]').value.trim();
  const mesaj = document.querySelector('[name="mesaj"]').value.trim();

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const telefonRegex = /^\d+$/;

  if (!adsoyad || !email || !telefon || !mesaj) {
    alert("Tüm alanlar doldurulmalıdır.");
    return;
  }

  if (!emailRegex.test(email)) {
    alert("Geçerli bir e-mail giriniz.");
    return;
  }

  if (!telefonRegex.test(telefon)) {
    alert("Telefon sadece rakamlardan oluşmalıdır.");
    return;
  }

  alert("Form geçerli görünüyor (JS ile kontrol).");
}
