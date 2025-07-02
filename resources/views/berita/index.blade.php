<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <link rel="stylesheet" href="{{ asset('css/lifestyle.css') }}">
</head>
<body>

    <h1 style="text-align: center;">Daftar Berita</h1>

    <div class="berita-wrapper">
        @foreach($beritas as $berita)
            <div class="berita-card">
                <h2>{{ $berita->judul }}</h2>
                <p><strong>Kategori:</strong> {{ $berita->kategori }}</p>
                @if($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="gambar berita" style="width:200px; height:auto;">
                @endif
                <p>{{ Str::limit($berita->isi, 150, '...') }}</p>
                <a href="#">Baca Selengkapnya →</a>
            </div>
        @endforeach
    </div>

    <div class="pagination">
        {{ $beritas->links() }}
    </div>

</body>
</html>
