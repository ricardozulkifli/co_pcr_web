@extends('partials.home.layouts.app')

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

    {{-- 5) Program Studi --}}
    <div class="card">
        <h2>Daftar Program Studi</h2>
        <p>Berikut daftar program studi beserta statusnya.</p>

        <div class="table-wrapper">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Nama Program Studi</th>
                        <th style="width:180px;">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse(($prodi ?? []) as $item)

                        @php
                            $isUnggulan = strtolower($item['status']) === 'unggulan';
                        @endphp

                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>
                                <span class="status-badge {{ $isUnggulan ? 'unggulan' : '' }}">
                                    <span class="status-dot"></span>
                                    {{ $item['status'] }}
                                </span>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="2" style="opacity:0.7;">
                                Data program studi belum tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Navigasi --}}
    <div class="card">
        <h2>Navigasi</h2>
        <p>Kamu sedang di <b>home</b>.</p>
        <a class="btn" href="{{ url('/home') }}">Buka home</a>
    </div>

</div>
@endsection
