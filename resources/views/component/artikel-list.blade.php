@foreach ($artikels as $artikel)
  <div class="card">
    <h3>{{ $artikel->judul }}</h3>
    <p>{{ $artikel->konten }}</p>
  </div>
@endforeach