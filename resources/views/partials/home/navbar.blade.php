@php
    // Active state pakai route name (lebih rapi & akurat)
    $isHome    = request()->routeIs('home') || request()->routeIs('home.page');
    $isProfil  = request()->routeIs('profil');
    $isSejarah = request()->routeIs('sejarah');
    $isVM      = request()->routeIs('visi_misi');
@endphp

<div class="nav-wrap">
    <div class="nav nav--glass">
        {{-- LEFT: brand --}}
        <div class="nav-left">
            <a href="{{ route('home') }}" class="nav-brand" aria-label="Beranda">
                {{-- kalau kamu punya logo kampus, ganti src --}}
                <span class="nav-logo">
                    <span class="dot"></span>
                </span>

                <span class="brand">
                    <b>{{ $nama_kampus ?? 'Kampus' }}</b>
                    <small>{{ $slogan ?? 'Website Profil Kampus' }}</small>
                </span>
            </a>
        </div>

        {{-- RIGHT: links --}}
        <nav class="nav-links" aria-label="Navigasi utama">
            <a class="nav-link {{ $isHome ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="nav-link {{ $isProfil ? 'active' : '' }}" href="{{ route('profil') }}">Profil</a>
            <a class="nav-link {{ $isSejarah ? 'active' : '' }}" href="{{ route('sejarah') }}">Sejarah</a>
            <a class="nav-link {{ $isVM ? 'active' : '' }}" href="{{ route('visi_misi') }}">Visi & Misi</a>

            <span class="nav-sep"></span>

            <a class="btn btn-primary" href="{{ route('home') }}">Masuk</a>
        </nav>
    </div>
</div>
<style>.nav-wrap{
    max-width: 1100px;
    margin: 0 auto;
    padding: 18px 24px 0;
}

.nav{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:16px;
    padding: 14px 16px;
    border-radius: 18px;
}

.nav--glass{
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    box-shadow: 0 10px 30px rgba(0,0,0,.25);
    backdrop-filter: blur(14px);
}

.nav-brand{
    display:flex;
    align-items:center;
    gap:12px;
    text-decoration:none;
    color: inherit;
    min-width: 0;
}

.nav-logo{
    width: 34px;
    height: 34px;
    border-radius: 12px;
    display:grid;
    place-items:center;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
}

.brand{
    display:flex;
    flex-direction:column;
    gap:2px;
    min-width:0;
}

.brand b{
    font-size: 13px;
    font-weight: 700;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.brand small{
    font-size: 11px;
    color: rgba(229,231,235,0.65);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.nav-links{
    display:flex;
    align-items:center;
    gap:10px;
    flex-wrap:wrap;
    justify-content:flex-end;
}

.nav-link{
    color: rgba(229,231,235,0.78);
    text-decoration:none;
    font-size: 12px;
    padding: 8px 10px;
    border-radius: 999px;
    border: 1px solid transparent;
    transition: background .12s ease, border-color .12s ease, color .12s ease;
}

.nav-link:hover{
    background: rgba(255,255,255,0.06);
    border-color: rgba(255,255,255,0.12);
    color: rgba(229,231,235,0.92);
}

.nav-link.active{
    background: linear-gradient(135deg, rgba(96,165,250,.18), rgba(34,211,238,.12));
    border-color: rgba(96,165,250,.45);
    color: rgba(229,231,235,0.95);
    box-shadow: 0 10px 30px rgba(0,0,0,.20);
}

.nav-sep{
    width: 1px;
    height: 22px;
    background: rgba(255,255,255,0.12);
    margin: 0 2px;
}

.btn-primary{
    border-color: rgba(34,211,238,.55);
    background: linear-gradient(135deg, rgba(96,165,250,.22), rgba(34,211,238,.16));
}

@media (max-width: 820px){
    .nav{
        flex-direction: column;
        align-items: stretch;
    }
    .nav-links{
        justify-content: flex-start;
    }
    .nav-sep{
        display:none;
    }
}
</style>