<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - {{ $nama_kampus }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg: #0b1220;
            --card: rgba(255,255,255,0.07);
            --border: rgba(255,255,255,0.12);
            --text: #e5e7eb;
            --muted: rgba(229,231,235,0.75);
            --primary: #60a5fa;
            --primary2: #22d3ee;
            --shadow: 0 18px 60px rgba(0,0,0,.35);
            --radius: 18px;
        }
        *{ box-sizing: border-box; }
        body{
            margin:0;
            font-family: Inter, Arial, sans-serif;
            background:
                radial-gradient(1100px 520px at 20% 0%, rgba(34,211,238,.18), transparent 55%),
                radial-gradient(900px 520px at 90% 10%, rgba(96,165,250,.18), transparent 60%),
                radial-gradient(900px 520px at 50% 100%, rgba(99,102,241,.15), transparent 60%),
                var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        .wrap{ max-width: 1100px; margin: 0 auto; padding: 24px; }
        .card{
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 22px;
            margin-bottom: 18px;
        }
        .grid-2{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }
        h1,h2{ margin: 0 0 10px; }
        p{ margin: 0 0 10px; color: var(--muted); }
        ul{ margin: 0; padding-left: 18px; color: var(--muted); }
        .chip{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            color: rgba(229,231,235,0.88);
            font-size: 12px;
        }
        .dot{ width: 8px; height: 8px; border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary2));
        }
        .btn{
            display:inline-block;
            padding: 10px 14px;
            border-radius: 999px;
            border: 1px solid rgba(96,165,250,0.55);
            background: linear-gradient(135deg, rgba(96,165,250,.18), rgba(34,211,238,.12));
            color: var(--text);
            text-decoration:none;
            font-size: 12px;
            font-weight: 600;
        }
        footer{
            text-align:center;
            padding: 16px 0 28px;
            color: rgba(229,231,235,0.55);
            font-size: 12px;
        }
        @media (max-width: 820px){
            .grid-2{ grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="wrap">

    {{-- 1) Judul Utama --}}
    @include('partials.home._judul')

    {{-- 2) Logo Kampus --}}
    @include('partials.home._logo')

    {{-- 3) Visi & Misi --}}
    @include('partials.home._visi_misi')

    {{-- 4) Deskripsi Sejarah --}}
    @include('partials.home._sejarah')

    <div class="card">
        <h2>Navigasi</h2>
        <p>Kamu sedang di <b>home</b>.</p>
        <a class="btn" href="{{ url('/home') }}">Buka home</a>
    </div>

    <footer>
        © {{ date('Y') }} {{ $nama_kampus }} • Dibuat dengan Laravel
    </footer>

</div>

</body>
</html>
