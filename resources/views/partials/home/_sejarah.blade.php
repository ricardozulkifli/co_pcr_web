<div class="card">
    <h2>Deskripsi Sejarah</h2>

    @if(!empty($sejarah) && is_array($sejarah))
        @foreach ($sejarah as $paragraf)
            <p>{{ $paragraf }}</p>
        @endforeach
    @else
        <p style="opacity:0.7;">Sejarah belum tersedia.</p>
    @endif
</div>