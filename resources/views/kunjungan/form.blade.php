@extends('partials.home.layouts.app')

@section('content')
<section class="form-section">
    <div class="container">
        <div class="form-card">

            <h2 class="form-title">Form Pendaftaran Kunjungan Kampus</h2>
            <p class="form-subtitle">
                Form diperuntukkan bagi instansi, sekolah atau universitas.
            </p>

            {{-- Success --}}
            @if(session('success'))
                <div class="alert-success-custom">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('kunjungan.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama"
                        class="form-control-custom"
                        value="{{ old('nama') }}">
                    @error('nama')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email"
                        class="form-control-custom"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Institusi</label>
                    <input type="text" name="institusi"
                        class="form-control-custom"
                        value="{{ old('institusi') }}">
                    @error('institusi')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary-custom">
                    Kirim Pendaftaran
                </button>
            </form>

        </div>
    </div>
</section>
@endsection
