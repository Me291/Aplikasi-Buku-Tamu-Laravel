<!-- resources/views/tamu/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Tamu Baru</h1>

        <!-- Tampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Terjadi kesalahan!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('tamu.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
            </div>

            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
            </div>

            <div class="mb-4">
                <label for="tujuan" class="form-label">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
            </div>

            <div class="mb-4">
                <label for="catatan" class="form-label">Catatan</label>
                <textarea class="form-control" id="catatan" name="catatan">{{ old('catatan') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100">Simpan</button>
        </form>

        <br>
        <a href="{{ route('tamu.index') }}" class="btn btn-outline-secondary w-100">Kembali ke Daftar Tamu</a>
    </div>
@endsection
