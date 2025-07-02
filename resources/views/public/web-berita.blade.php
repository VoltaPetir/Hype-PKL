<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypenings - Media Berita</title>
    <link rel="stylesheet" href="{{ asset('css/web-berita.css') }}">
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

        <div class="slider-container">
            <div class="slider">
                <img src="{{ asset('image/liz.jpg') }}" alt="Slide 1">
                <img src="{{ asset('image/gaeul-ive.jpg') }}" alt="Slide 2">
                <img src="{{ asset('image/wonyoung.webp') }}" alt="Slide 3">
            </div>

            <button class="prev" onclick="prevSlide()">❮</button>
            <button class="next" onclick="nextSlide()">❯</button>
        </div>
    </div>

    <section class="section" id="trending">
        <h2 class="section-title">Berita Tren</h2>
        <div class="container">
            @foreach ($beritaTrending as $berita)
            <article class="card">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="gambar">
                <div class="content">
                    <p>{{ Str::limit($berita->isi, 100) }}</p>
                    <a href="#">Baca Selengkapnya →</a>
                </div>
            </article>
            @endforeach
        </div>
    </section>

    <section class="news-section" id="topik">
        <div class="news-headline-container">
            <h2 class="section-title">TOPIK</h2>
            <h2 class="news-section-title">TERPOPULER</h2>
        </div>
        <div class="latest-news-container">
            <div class="news-cards-wrapper">

                <!-- News Card 1 -->
                <article class="news-cards">
                    <img src="{{ asset('image/wonyoung.webp') }}" alt="thumb" class="thumb">
                    <div class="news-contents">
                        <span class="category">Lorem Ipsum</span>
                        <h3 class="news-title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p class="date">11 Juni 2025, 17:36 WIB</p>
                        <button><a href="/dh">Selengkapnya</a></button>
                    </div>
                </article>

                <!-- News Card 2 -->
                <article class="news-cards">
                    <img src="{{ asset('image/liz.jpg') }}" alt="">
                    <div class="news-contents">
                        <span class="category">Lorem ipsum</span>
                        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p>11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </article>

                <!-- News Card 3 -->
                <article class="news-cards">
                    <img src="{{ asset('image/gaeul-ive.jpg') }}" alt="">
                    <div class="news-contents">
                        <span class="category">Lorem Ipsum</span>
                        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p>11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </article>

                <!-- News Card 4 -->
                <article class="news-cards">
                    <img src="{{ asset('image/iseo.jpg') }}" alt="">
                    <div class="news-contents">
                        <span class="category">Lorem Ipsum</span>
                        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                        <p>11 Juni 2025, 17:36 WIB</p>
                        <button>Selengkapnya</button>
                    </div>
                </article>
            </div>

            <div class="list" id="terpopuler">
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

    <section class="shorts-section" id="shorts">
        <h2 class="shorts-title">HYPENINGS SHORTS</h2>
        <div class="shorts-container">

            <!-- Card Shorts 1-->
            <article class="short-card">
                <div class="thumb-wrapper">
                    <img src="{{ asset('image/iseo.jpg') }}" alt="thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="short-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </article>


            <!-- Card Shorts 2-->
            <article class="short-card">
                <div class="thumb-wrapper">
                    <img src="{{ asset('image/wonyoung.webp') }}" alt="thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="short-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </article>


            <!-- Card Shorts 3 -->
            <article class="short-card">
                <div class="thumb-wrapper">
                    <img src="{{ asset('image/gaeul-ive.jpg') }}" alt="thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="short-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </article>


            <!-- Card Shorts 4 -->
            <article class="short-card">
                <div class="thumb-wrapper">
                    <img src="{{ asset('image/liz.jpg') }}" alt="thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="short-desc">
                    <p>Lorem Ipsum dolor sit amet cos=nsectetur adipisicing elit.</p>
                </div>
            </article>
        </div>

        <div class="see-all">
            <a href="#">Lihat Semua &rarr;</a>
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