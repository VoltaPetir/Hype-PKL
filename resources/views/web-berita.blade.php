<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/web-berita.css') }}">
</head>

<body>
    <div class="slider-wrapper">
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('image/hype.png') }}" alt="logo" width="120">
            </div>

            <ul class="nav-links">
                <li><a href="">Beranda</a></li>
                <li><a href="">Trending</a></li>
                <li><a href="">Topik</a></li>
                <li><a href="">Shorts</a></li>
                <li><a href="">Tentang Kita?</a></li>
            </ul>
        </nav>

        <div class="slider-container">
            <div class="slider">
                <img src="{{ asset('image/iseo.jpg') }}" alt="Slide 1">
                <img src="{{ asset('image/iseo.jpg') }}" alt="Slide 2">
                <img src="{{ asset('image/iseo.jpg') }}" alt="Slide 3">
            </div>

            <button class="prev" onclick="prevSlide()">❮</button>
            <button class="next" onclick="nextSlide()">❯</button>
        </div>
    </div>

    <section class="section">
        <h2>Berita Tren</h2>
        <div class="container">

            <!-- Card 1 -->
            <div class="card">
                <img src="{{ asset('image/iseo.jpg') }}" alt="">
                <div class="content">
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">Baca Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="{{ asset('image/iseo.jpg') }}" alt="">
                <div class="content">
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">Baca Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="{{ asset('image/iseo.jpg') }}" alt="">
                <div class="content">
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">Baca Selengkapnya →</a>
                </div>
            </div>
    </section>

    <section class="news-section">
        <div class="news-headline-container">
            <h2 class="section-title">TERBARU</h2>
            <h2 class="news-section-title">TERPOPULER</h2>
        </div>
        <div class="latest-news-container">
            <div class="news-cards-wrapper">

                <!-- News Card 1 -->
                <div class="news-cards">
                    <img src="{{ asset('image/iseo.jpg') }}" alt="thumb" class="thumb">
                    <div class="news-contents">
                        <span class="category">Lorem Ipsum</span>
                        <h3 class="news-title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p class="date">11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="news-cards">
                    <img src="{{ asset('image/iseo.jpg') }}" alt="">
                    <div class="news-contents">
                        <span class="category">Lorem ipsum</span>
                        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p>11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="news-cards">
                    <img src="{{ asset('image/iseo.jpg') }}" alt="">
                    <div class="news-contents">
                        <span class="category">Lorem Ipsum</span>
                        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p>11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </div>

                <!-- News Card 4 -->
                <div class="news-cards">
                    <img src="{{ asset('image/iseo.jpg') }}" alt="">
                    <div class="news-contents">
                        <span class="category">Lorem Ipsum</span>
                        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p>11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </div>
            </div>

            <div class="list">
                <!-- List Item -->
                <div class="item">
                    <div class="number">1</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">2</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">3</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">4</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">5</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">6</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">7</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
                <div class="item">
                    <div class="number">8</div>
                    <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error culpa consequatur eaque,</p>
                </div>
            </div>
        </div>
    </section>


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

    <!-- JS -->
    <script src="{{ asset('js/slider.js') }}"></script>

</body>

</html>