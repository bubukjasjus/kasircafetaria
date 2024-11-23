@extends('layout.master')

@section('content')
    <div class="container-fluid intro">
        <div class="row">
            <div style="text-align: justify; margin-top:80px; padding-left: 120px" class="col-md-4 pt-5 offset-md-1">
                <h2 style=" font-family:  cursive; color: red" >Kantin Menara 165</h2>
                <p>Menyediakan makanan dari berbagai daerah, 
                    dan siap dimakan untuk ada yang mager beli langsung </div>
        </div>
        <div class="row">
            
            <div class="col offset-9  ">
                <img src="img/gambar1.png" alt="burgers" class="burger">
            </div>
        </div>
    </div>





    <div class="menufav">
        <div class="p-5">
            <h3 class="text-center">pilihan warung favorit kamu?</h3>
        </div>
        <div class="container">
            <div class="row">
                @foreach($data as $item)
                    <div class="col-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->nama_makanan }}" class="food-item card-img-top">
                            <div class="card-body">
                                <h5 class="food-text">{{ $item->nama_makanan }}</h5>
                                <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                <p>Stok: {{ $item->stok }} item</p>
                                <a href="{{ route('toko-makanan.show', $item->id) }}" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection