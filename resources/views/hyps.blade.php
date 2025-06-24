<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hypenings</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
<body>
  <nav class="navbar">
    <div class="logo">Hypenings</div>

    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="hamburger">☰</label>

    <aside class="offcanvas">
      <label for="menu-toggle" class="close-btn">×</label>
      <nav>
        <h3>Menu</h3>
        <a href="#">Trending</a>
        <a href="#">Topik</a>
        <a href="#">ZClips</a>
        <a href="#">Join Squad</a>
      </nav>
    </aside>

    <ul class="nav-links">
      <li><a href="#">Trending</a></li>
      <li><a href="#">Topik</a></li>
      <li><a href="#">Shorts</a></li>
      <li><a href="#">Tentang Kita?</a></li>
      <li><a href="#">Join Squad</a></li>
    </ul>
  </nav>

  <section class="news-section">
    <h2>Berita Terkini</h2>
    <div class="news-container">
      <!-- Card 1 -->
      <div class="news-card">
        <img src="../eka/img/iseo.jpg" alt="Berita 1">
        <div class="news-content">
          <h3>#Delulu Challenge Viral di TikTok</h3>
          <p>Fenomena 'delulu is the solulu' makin booming di kalangan Gen Z. Gimana pengaruhnya?</p>
          <a href="#">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="news-card">
        <img src="../eka/img/iseo.jpg" alt="Berita 2">
        <div class="news-content">
          <h3>Skill Kerja yang Wajib Dimiliki Fresh Grad 2025</h3>
          <p>Dari AI tools sampai komunikasi digital. Siap bersaing di dunia kerja?</p>
          <a href="#">Lihat Tipsnya →</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="news-card">
        <img src="../eka/img/iseo.jpg" alt="Berita 3">
        <div class="news-content">
          <h3>Gen Z & Overthinking: Fenomena atau Alarm?</h3>
          <p>Kenapa makin banyak anak muda ngerasa cemas & burnout? Ini alasannya.</p>
          <a href="#">Selengkapnya →</a>
        </div>
      </div>
    </div>
  </section>

  <section class="news-section">
    <h2 class="section-title">TERBARU</h2>
    <div class="latest-news-container">
      <div class="news-cards-wrapper">
        <!-- News Card 1 -->
        <div class="news-cards">
          <img src="../eka/img/iseo.jpg" alt="thumb" class="thumb">
          <div class="news-contents">
            <span class="category">Olahraga</span>
            <h3 class="news-title">Permintaan Maaf Terbuka Jay Idzes Usai Indonesia Dibantai Jepang 6-0</h3>
            <p class="date">11 Juni 2025, 17:36 WIB</p>
          </div>
        </div>

        <hr>

        <!-- News Card 2 -->
        <div class="news-cards">
          <img src="../eka/img/iseo.jpg" alt="thumb" class="thumb">
          <div class="news-contents">
            <span class="category">Video</span>
            <h3 class="news-title">Kisah Nayla, Kelas 2 SMP Putus Sekolah karena Tak Ada Biaya</h3>
            <p class="date">11 Juni 2025, 17:35 WIB</p>
          </div>
        </div>

        <hr>

        <!-- News Card 3 -->
        <div class="news-cards">
          <img src="../eka/img/iseo.jpg" alt="thumb" class="thumb">
          <div class="news-contents">
            <span class="category">Video</span>
            <h3 class="news-title">Kisah Nayla, Kelas 2 SMP Putus Sekolah karena Tak Ada Biaya</h3>
            <p class="date">11 Juni 2025, 17:35 WIB</p>
          </div>
        </div>

        <hr>

        <!-- News Card 4 -->
        <div class="news-cards">
          <img src="../eka/img/iseo.jpg" alt="thumb" class="thumb">
          <div class="news-contents">
            <span class="category">Video</span>
            <h3 class="news-title">Kisah Nayla, Kelas 2 SMP Putus Sekolah karena Tak Ada Biaya</h3>
            <p class="date">11 Juni 2025, 17:35 WIB</p>
          </div>
        </div>
      </div>

      <div class="news-list">
        <!-- List Items -->
        <div class="news-item"><div class="number">1</div><p class="title">Respons Menteri ESDM Bahli soal Kapal JKW dan Dewi...</p></div>
        <div class="news-item"><div class="number">2</div><p class="title">Fakta Tambang Nikel Raja Ampat, Begini Kumpulan...</p></div>
        <div class="news-item"><div class="number">3</div><p class="title">Komentar Ketum PSSI Erick Thohir usai Timnas Indone...</p></div>
        <div class="news-item"><div class="number">4</div><p class="title">Respons Menteri ESDM Bahli soal Kapal JKW dan Dewi...</p></div>
        <div class="news-item"><div class="number">5</div><p class="title">Fakta Tambang Nikel Raja Ampat, Begini Kumpulan...</p></div>
        <div class="news-item"><div class="number">6</div><p class="title">Komentar Ketum PSSI Erick Thohir usai Timnas Indone...</p></div>
        <div class="news-item"><div class="number">7</div><p class="title">Respons Menteri ESDM Bahli soal Kapal JKW dan Dewi...</p></div>
        <div class="news-item"><div class="number">8</div><p class="title">Fakta Tambang Nikel Raja Ampat, Begini Kumpulan...</p></div>
        <div class="news-item"><div class="number">9</div><p class="title">Komentar Ketum PSSI Erick Thohir usai Timnas Indone...</p></div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <p>© 2025 Stay curious. Hypenings.</p>
  </footer>
</body>
</html>
