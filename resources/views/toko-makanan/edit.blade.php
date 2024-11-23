@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h1>Edit Makanan</h1>
    <form action="{{ route('toko-makanan.update', $tokoMakanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" id="nama_makanan" value="{{ $tokoMakanan->nama_makanan }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ $tokoMakanan->harga }}">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" id="stok" value="{{ $tokoMakanan->stok }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
