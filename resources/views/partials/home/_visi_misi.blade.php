<div class="grid-2">
    <div class="card">
        <h2>Visi</h2>
        <p>{{ $visi }}</p>
    </div>

    <div class="card">
        <h2>Misi</h2>
        <ul>
            @foreach ($misi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
