<!-- resources/views/tamu/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Data Tamu</h1>

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

        <form action="{{ route('tamu.update', $tamu->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $tamu->nama) }}" required>
            </div>

            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $tamu->alamat) }}" required>
            </div>

            <div class="mb-4">
                <label for="tujuan" class="form-label">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ old('tujuan', $tamu->tujuan) }}" required>
            </div>

            <div class="mb-4">
                <label for="catatan" class="form-label">Catatan</label>
                <textarea class="form-control" id="catatan" name="catatan">{{ old('catatan', $tamu->catatan) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100">Perbarui</button>
        </form>

        <br>
        <a href="{{ route('tamu.index') }}" class="btn btn-outline-secondary w-100">Kembali ke Daftar Tamu</a>
    </div>
@endsection
