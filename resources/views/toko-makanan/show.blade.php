@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h1>Detail Makanan: {{ $tokoMakanan->nama_makanan }}</h1>
    <div class="card">
        <img src="{{ asset('storage/'.$tokoMakanan->gambar) }}" alt="{{ $tokoMakanan->nama_makanan }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $tokoMakanan->nama_makanan }}</h5>
            <p class="card-text">Harga: Rp {{ number_format($tokoMakanan->harga, 0, ',', '.') }}</p>
            <p class="card-text">Stok: {{ $tokoMakanan->stok }} item</p>
            <a href="{{ route('toko-makanan.edit', $tokoMakanan->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('toko-makanan.destroy', $tokoMakanan->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="{{ route('toko-makanan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
