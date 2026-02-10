<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'Home') - {{ $nama_kampus ?? 'Kampus' }}</title>

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
        backdrop-filter: blur(10px);
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
        user-select:none;
        white-space:nowrap;
    }

    .dot{
        width: 8px; height: 8px; border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--primary2));
    }

    .btn{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        gap:8px;
        padding: 10px 14px;
        border-radius: 999px;
        border: 1px solid rgba(96,165,250,0.55);
        background: linear-gradient(135deg, rgba(96,165,250,.18), rgba(34,211,238,.12));
        color: var(--text);
        text-decoration:none;
        font-size: 12px;
        font-weight: 600;
        transition: transform .12s ease, border-color .12s ease;
    }
    .btn:hover{ transform: translateY(-1px); border-color: rgba(34,211,238,.6); }

    .nav-wrap{
        max-width: 1100px;
        margin: 0 auto;
        padding: 18px 24px 0;
    }
    .nav{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:14px;
        padding: 14px 16px;
        border-radius: 16px;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.12);
        box-shadow: 0 10px 30px rgba(0,0,0,.25);
        backdrop-filter: blur(12px);
    }
    .nav-left{
        display:flex;
        align-items:center;
        gap:12px;
        min-width: 0;
    }
    .brand{
        display:flex;
        flex-direction:column;
        gap:2px;
        min-width:0;
    }
    .brand b{
        font-size: 13px;
        font-weight:700;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    }
    .brand small{
        font-size: 11px;
        color: rgba(229,231,235,0.65);
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
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
        transition: background .12s ease, border-color .12s ease;
    }
    .nav-link:hover{
        background: rgba(255,255,255,0.06);
        border-color: rgba(255,255,255,0.12);
    }
    .nav-link.active{
        background: rgba(96,165,250,.12);
        border-color: rgba(96,165,250,.35);
        color: rgba(229,231,235,0.92);
    }

    footer{
        text-align:center;
        padding: 16px 0 28px;
        color: rgba(229,231,235,0.55);
        font-size: 12px;
    }

    @media (max-width: 820px){
        .grid-2{ grid-template-columns: 1fr; }
        .nav{ flex-direction: column; align-items: stretch; }
        .nav-links{ justify-content: flex-start; }
    }
</style>
