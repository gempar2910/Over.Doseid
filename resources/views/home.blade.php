<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Overdose Coffee</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
  body {
    font-family: 'Montserrat', sans-serif;
  }
  .overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.65);
    z-index: -1;
  }
  .background {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: url('{{ asset('images/bg-coffee.jpg') }}') no-repeat center center;
    background-size: cover;
    z-index: -2;
    transform: scale(1.05);
    filter: blur(3px) brightness(0.8);
  }
  .fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s ease, transform 1s ease;
  }
  .fade-in.show {
    opacity: 1;
    transform: translateY(0);
  }
  html {
    scroll-behavior: smooth;
  }
</style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const items = document.querySelectorAll('.fade-in');
      items.forEach((el, i) => {
        setTimeout(() => el.classList.add('show'), i * 150);
      });
    });
  </script>
</head>
<body class="text-white min-h-screen">

  <!-- Background -->
  <div class="background"></div>
  <div class="overlay"></div>

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-black/80 to-gray-900/80 px-6 py-4 fixed w-full top-0 shadow z-50 backdrop-blur">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center space-x-3">
        <img 
          src="{{ asset('images/logo.png') }}" 
          alt="Logo Overdose Coffee" 
          class="h-8 w-8 rounded-full object-cover border border-white shadow" />
        <span class="text-2xl font-bold tracking-wide">Overdose Coffee</span>
      </div>
      <ul class="flex space-x-4 sm:space-x-6 text-sm sm:text-base">
        <li><a href="#lokasi" class="hover:text-yellow-400 transition">Lokasi</a></li>
        <li><a href="#tentang" class="hover:text-yellow-400 transition">Tentang</a></li>
        <li><a href="#gofood" class="hover:text-yellow-400 transition">GoFood</a></li>
        <li><a href="#owner" class="hover:text-yellow-400 transition">Owner</a></li>
        <li><a href="#jam-buka" class="hover:text-yellow-400 transition">Jam Buka</a></li>
        <li><a href="#instagram" class="hover:text-yellow-400 transition">Instagram</a></li>
      </ul>
    </div>
  </nav>

  <!-- Content -->
  <main class="pt-28 max-w-3xl mx-auto p-4 space-y-10 bg-black/60 rounded-lg shadow-xl backdrop-blur-md">

    <!-- Logo Besar di Tengah -->
    <img
      src="{{ asset('images/logo.png') }}"
      alt="Logo Overdose Coffee"
      class="h-28 w-28 mx-auto mb-3 rounded-full object-cover shadow-lg border-2 border-white transform transition duration-500 hover:scale-110 hover:rotate-6 fade-in"
    />

    <!-- Lokasi -->
    <section id="lokasi" class="fade-in">
      <h2 class="text-2xl font-semibold mb-2">Google Maps</h2>
      <p>Jl. Pancoran Timur III No.1C, RT.10/RW.08, Pengadegan, Jakarta Selatan</p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.256363946877!2d106.84939687499484!3d-6.232257993758263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f23cf1657fb1%3A0x3e2b3e1e49c3f465!2sJl.%20Pancoran%20Timur%20III%20No.1C%2C%20RT.10%2FRW.08%2C%20Pengadegan%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012780!5e0!3m2!1sid!2sid!4v1720160000000!5m2!1sid!2sid"
        width="100%"
        height="300"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </section>

    <!-- Tentang -->
    <section id="tentang" class="fade-in">
      <h2 class="text-2xl font-semibold mb-2">Tentang Overdose Coffee</h2>
      <p>
        Overdose Coffee adalah tempat nongkrong dengan nuansa santai dan biji kopi pilihan. Kami hadir untuk menyajikan rasa kopi otentik dan suasana yang menyenangkan di tengah kota Jakarta.
      </p>
    </section>

    <!-- GoFood & ShopeeFood -->
    <section id="gofood" class="fade-in">
      <h2 class="text-2xl font-semibold mb-2 inline-flex items-center gap-2">
        <!-- Logo Gojek SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-500">
          <path d="M12 2C6.476 2 2 6.477 2 12s4.476 10 10 10 10-4.477 10-10S17.524 2 12 2zm0 18.4A8.4 8.4 0 1 1 20.4 12 8.41 8.41 0 0 1 12 20.4zm0-13.8a5.4 5.4 0 1 0 5.4 5.4A5.406 5.406 0 0 0 12 6.6zm0 8.4a3 3 0 1 1 3-3 3.003 3.003 0 0 1-3 3z"/>
        </svg>
        Pesan Online
      </h2>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="https://gofood.co.id/jakarta/restaurant/overdose-coffee-c5dbd823-c44a-4d9a-97ab-daa62fcfd66c"
           target="_blank"
           class="flex-1 inline-block bg-gradient-to-r from-green-500 to-green-700 text-white px-4 py-2 rounded transform transition duration-300 hover:scale-105 hover:brightness-110 text-center">
          Pesan di GoFood
        </a>
        <a href="https://shopee.co.id/universal-link/now-food/shop/22160354?deep_and_deferred=1&shareChannel=copy_link"
           target="_blank"
           class="flex-1 inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white px-4 py-2 rounded transform transition duration-300 hover:scale-105 hover:brightness-110 text-center">
          Pesan di ShopeeFood
        </a>
      </div>
    </section>

    <!-- Owner -->
    <section id="owner" class="fade-in">
      <h2 class="text-2xl font-semibold mb-2">Tentang Pemilik</h2>
      <p>
        Didirikan oleh <strong>Irfan Hajjid</strong>, pecinta kopi yang ingin menciptakan tempat di mana kopi bukan sekadar minuman, tapi pengalaman.
      </p>
    </section>

    <!-- Jam Buka -->
    <section id="jam-buka" class="fade-in">
      <h2 class="text-2xl font-semibold mb-2">Jam Buka</h2>
      <ul class="space-y-1">
        <li><strong>Senin - Jumat:</strong> 09.00 – 22.00</li>
        <li><strong>Sabtu:</strong> 15.00 – 01.00</li>
        <li><strong>Minggu:</strong> 15.00 – 01.00</li>
      </ul>
    </section>

    <!-- Instagram -->
    <section id="instagram" class="fade-in">
      <h2 class="text-2xl font-semibold mb-2">Follow Instagram Kami</h2>
      <a href="https://www.instagram.com/over.doseid/?next=%2Fredhatacademy.id%2F&hl=en"
         target="_blank"
         class="inline-block bg-gradient-to-r from-pink-500 to-pink-600 text-white px-4 py-2 rounded hover:brightness-110 transition">
        Instagram
      </a>
    </section>

  </main>

  <footer class="text-center py-4 text-sm text-white bg-black/80 mt-10">
    &copy; {{ date('Y') }} Overdose Coffee. All rights reserved.
  </footer>
</body>
</html>
