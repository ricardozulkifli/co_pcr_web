<div class="grid-2">

    {{-- VISI --}}
    <div class="card">
        <h2>Visi</h2>
        <p>
            {{ $visi ?? 'Visi belum tersedia.' }}
        </p>
    </div>

    {{-- MISI --}}
    <div class="card">
        <h2>Misi</h2>

        @if(!empty($misi) && is_array($misi))
            <ul>
                @foreach ($misi as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p style="opacity:0.7;">Misi belum tersedia.</p>
        @endif

    </div>

</div>