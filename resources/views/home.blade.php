@extends('layouts.app')

@section('content')
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
        <h2>Daftar Program Studi</h2>
        <p>Berikut daftar program studi beserta statusnya.</p>
    
        <div style="overflow:auto; border-radius: 14px;">
            <table style="width:100%; border-collapse: collapse; min-width: 520px;">
                <thead>
                    <tr>
                        <th style="text-align:left; padding:12px 14px; background: rgba(255,255,255,0.06); border-bottom:1px solid rgba(255,255,255,0.12);">
                            Nama Program Studi
                        </th>
                        <th style="text-align:left; padding:12px 14px; background: rgba(255,255,255,0.06); border-bottom:1px solid rgba(255,255,255,0.12); width: 180px;">
                            Status
                        </th>
                    </tr>
                </thead>
    
                <tbody>
                    @forelse(($prodi ?? []) as $item)
                        <tr>
                            <td style="padding:12px 14px; border-bottom:1px solid rgba(255,255,255,0.08); color: rgba(229,231,235,0.9);">
                                {{ $item['nama'] }}
                            </td>
    
                            <td style="padding:12px 14px; border-bottom:1px solid rgba(255,255,255,0.08);">
                                @php
                                    $isUnggulan = strtolower($item['status']) === 'unggulan';
                                @endphp
    
                                <span style="
                                    display:inline-flex;
                                    align-items:center;
                                    gap:8px;
                                    padding:6px 10px;
                                    border-radius:999px;
                                    font-size:12px;
                                    border:1px solid rgba(255,255,255,0.12);
                                    background: {{ $isUnggulan ? 'rgba(96,165,250,.18)' : 'rgba(255,255,255,0.06)' }};
                                    color: rgba(229,231,235,0.9);
                                ">
                                    <span style="
                                        width:8px;height:8px;border-radius:50%;
                                        background: {{ $isUnggulan ? 'linear-gradient(135deg, #60a5fa, #22d3ee)' : 'rgba(229,231,235,0.45)' }};
                                    "></span>
                                    {{ $item['status'] }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" style="padding:14px; color: rgba(229,231,235,0.7);">
                                Data program studi belum tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card">
        <h2>Navigasi</h2>
        <p>Kamu sedang di <b>home</b>.</p>
        <a class="btn" href="{{ url('/home') }}">Buka home</a>
    </div>

</div>
@endsection
