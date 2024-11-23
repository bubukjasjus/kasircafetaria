@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h1>Tambah Makanan</h1>
    <form action="{{ route('toko-makanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" id="nama_makanan" value="{{ old('nama_makanan') }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ old('harga') }}">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" id="stok" value="{{ old('stok') }}">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
