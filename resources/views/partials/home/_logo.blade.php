{{-- ================= LOGO ================= --}}
<div class="card">
    <h2>Logo Kampus</h2>
    <p>Berikut logo kampus</p>

    <div style="
        margin-top:14px;
        display:flex;
        align-items:center;
        justify-content:center;
        padding:18px;
        border:1px dashed rgba(255,255,255,0.18);
        border-radius:16px;
        background: rgba(255,255,255,0.03);
    ">

        @if(!empty($logo))
            <img
                src="{{ asset($logo) }}"
                alt="Logo Kampus"
                style="max-width:220px; width:100%; height:auto; background:#fff; padding:10px; border-radius:16px;"
                onerror="this.style.display='none'"
            >
        @else
            <span style="opacity:0.7;">Logo belum tersedia.</span>
        @endif

    </div>
</div>