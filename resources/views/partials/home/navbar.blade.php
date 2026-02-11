@php
    $isHome      = request()->routeIs('home');
    $isProfil    = request()->routeIs('profil');
    $isSejarah   = request()->routeIs('sejarah');
    $isVM        = request()->routeIs('visi_misi');
    $isKunjungan = request()->routeIs('kunjungan.form');
@endphp

<style>
/* ===============================
   NAVBAR PROFESSIONAL STYLE
================================= */

.navbar-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 24px 20px 0;
}

.navbar-container {
    width: 100%;
    max-width: 1150px;
    height: 72px;
    padding: 0 32px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-radius: 18px;
    backdrop-filter: blur(18px);
    background: rgba(17, 25, 40, 0.75);
    border: 1px solid rgba(255,255,255,0.08);

    box-shadow: 0 10px 35px rgba(0,0,0,0.35);
}

/* ===== BRAND ===== */
.navbar-brand {
    display: flex;
    align-items: center;
    gap: 14px;
    text-decoration: none;
}

.brand-logo {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, #2563eb, #06b6d4);
}

.brand-text {
    display: flex;
    flex-direction: column;
}

.brand-title {
    font-size: 15px;
    font-weight: 600;
    color: #ffffff;
}

.brand-sub {
    font-size: 12px;
    color: rgba(255,255,255,0.65);
}

/* ===== MENU ===== */
.navbar-menu {
    display: flex;
    align-items: center;
    gap: 30px;
}

.nav-item {
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    color: rgba(255,255,255,0.75);
    position: relative;
    transition: 0.3s ease;
}

.nav-item:hover {
    color: #ffffff;
}

.nav-item.active {
    color: #ffffff;
}

.nav-item.active::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #3b82f6;
    border-radius: 6px;
}

/* ===== BUTTON LOGIN ===== */
.btn-login {
    padding: 8px 20px;
    border-radius: 999px;
    background: #2563eb;
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    transition: 0.3s ease;
}

.btn-login:hover {
    background: #1d4ed8;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {

    .navbar-container {
        flex-direction: column;
        height: auto;
        padding: 20px;
        gap: 18px;
    }

    .navbar-menu {
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px;
    }

}
</style>

<header class="navbar-wrapper">
    <div class="navbar-container">


            <div class="brand-text">
                <span class="brand-title">{{ $nama_kampus ?? 'Kampus' }}</span>
                <span class="brand-sub">{{ $slogan ?? 'Website Profil Kampus' }}</span>
            </div>
        </a>

        <nav class="navbar-menu">

            <a class="nav-item {{ $isHome ? 'active' : '' }}"
               href="{{ route('home') }}">
               Home
            </a>

            <a class="nav-item {{ $isProfil ? 'active' : '' }}"
               href="{{ route('profil') }}">
               Profil
            </a>

            <a class="nav-item {{ $isSejarah ? 'active' : '' }}"
               href="{{ route('sejarah') }}">
               Sejarah
            </a>

            <a class="nav-item {{ $isVM ? 'active' : '' }}"
               href="{{ route('visi_misi') }}">
               Visi & Misi
            </a>

            <a class="nav-item {{ $isKunjungan ? 'active' : '' }}"
               href="{{ route('kunjungan.form') }}">
               Kunjungan
            </a>

            <a class="btn-login"
               href="{{ route('home') }}">
               Masuk
            </a>

        </nav>

    </div>
</header>
