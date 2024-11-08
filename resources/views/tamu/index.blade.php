<!-- resources/views/tamu/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Tamu</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <script>
                setTimeout(function() {
                    var alert = document.getElementById('success-alert');
                    if (alert) {
                        alert.classList.remove('show');
                        alert.classList.add('fade');
                    }
                }, 2000); // 2 seconds
            </script>
        @endif

        <div class="mb-3 text-end">
            <a href="{{ route('tamu.create') }}" class="btn btn-success btn-lg">Tambah Tamu</a>
        </div>

        <div class="table-responsive shadow-sm rounded">
            <table class="table table-striped table-hover table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tujuan</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($tamus as $tamu)
                        <tr>
                            <td>{{ $tamu->nama }}</td>
                            <td>{{ $tamu->alamat }}</td>
                            <td>{{ $tamu->tujuan }}</td>
                            <td>{{ $tamu->catatan }}</td>
                            <td>
                                <a href="{{ route('tamu.edit', $tamu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
