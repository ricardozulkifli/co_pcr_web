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

    {{-- ========================================= --}}
    {{-- ========= FORM KUNJUNGAN CRUD ========== --}}
    {{-- ========================================= --}}

    <div class="card form-card">
        <h2>Form Pendaftaran Kunjungan</h2>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('kunjungan.store') }}" class="custom-form">
            @csrf

            <div class="form-group">
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="text" name="institusi" placeholder="Asal Institusi" required>
            </div>

            <button type="submit" class="btn-primary">Daftar</button>
        </form>
    </div>

    {{-- ========= DATA KUNJUNGAN ========= --}}
    <div class="card">
        <h2>Data Kunjungan</h2>

        <div class="table-wrapper">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Institusi</th>
                        <th width="140">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kunjungans as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->institusi }}</td>
                            <td>

                                <form method="POST"
                                      action="{{ route('kunjungan.delete', $item->id) }}"
                                      style="display:inline-block;"
                                      onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-danger">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum ada data kunjungan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION SEDERHANA --}}
        <div class="pagination-wrapper">
            {{ $kunjungans->onEachSide(1)->links() }}
        </div>

    </div>

</div>

{{-- ================================= --}}
{{-- ========= CSS TAMBAHAN ========= --}}
{{-- ================================= --}}
<style>

.form-card {
    margin-top: 40px;
}

.alert-success {
    background: #d1fae5;
    color: #065f46;
    padding: 10px 14px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.custom-form {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.form-group {
    flex: 1;
    min-width: 220px;
}

.custom-form input {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 14px;
}

.btn-primary {
    padding: 10px 18px;
    border-radius: 8px;
    border: none;
    background: #2563eb;
    color: #fff;
    cursor: pointer;
}

.btn-primary:hover {
    background: #1d4ed8;
}

.btn-danger {
    padding: 6px 12px;
    border-radius: 6px;
    border: none;
    background: #dc2626;
    color: #fff;
    cursor: pointer;
}

.btn-danger:hover {
    background: #b91c1c;
}

.pagination-wrapper {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

</style>

@endsection
