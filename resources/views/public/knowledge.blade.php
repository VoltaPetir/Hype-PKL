<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypenings - Media Berita</title>
    <link rel="stylesheet" href="{{ asset('css/knowledge.css') }}">
</head>

<body>
    <div class="slider-wrapper">
        <nav class="navbar">

            <div class="logo">
                <img src="{{ asset('image/hype.png') }}" alt="logo" width="120">
            </div>

            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="hamburger">☰</label>

            <aside class="offcanvas">
                <label for="menu-toggle" class="close-btn">×</label>
                <nav>
                    <h3>Category</h3>
                    <a href="/home">Home</a>
                    <a href="/lifestyle">Lifestyle</a>
                    <a href="/music">Music</a>
                    <a href="/sport">Sport</a>
                    <a href="/knowledge">Knowledge</a>
                    <a href="/other">Other</a>
                </nav>
            </aside>

            <ul class="nav-links">
                <li><a href="#trending">Trending</a></li>
                <li><a href="#topik">Topik</a></li>
                <li><a href="#shorts">Shorts</a></li>
                <li><a href="">Tentang Kita?</a></li>
            </ul>
        </nav>

        <h2 class="section-title">BROWSING CATEGORY</h2>
        <h1 class="section-title">Knowledge</h1>

        <div id="artikel-wrapper">
        </div>

        <div class="pagination">
            <a class="pag-a" href="#">&laquo;</a> <!-- Tombol prev -->
            <a class="pag-a" href="#">1</a>
            <a class="pag-a" href="#">2</a>
            <a class="pag-a" href="#">3</a>
            <a class="pag-a" href="#">4</a>
            <a class="pag-a" href="#">&raquo;</a> <!-- Tombol next -->
        </div>
    </div>

    <footer class="footer">
        <p>© 2025 Stay curious. Hypenings.</p>
        <p>FOLLOW KITA!</p>
        <div class="social-icons">
            <a href="https://instagram.com/" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" />
            </a>
            <a href="https://www.tiktok.com/" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/3046/3046121.png" alt="TikTok" />
            </a>
            <a href="https://facebook.com/" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" />
            </a>
        </div>
    </footer>

    <script src="{{ asset('js/slider-artikel.js') }}"></script>
</body>

</html>