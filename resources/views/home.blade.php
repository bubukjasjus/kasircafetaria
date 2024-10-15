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
                <div class="col-4">
                    <a href="page1.html" class="disable">
                        <div class="card">
                            <div class="food-item card-img-top"></div>
                            <div class="card-body">
                                <p class="food-text">Mie Ayam Ibu Aisyah</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="page2.html">
                        <div class="card">
                            <div class="food-item card-img-top"></div>
                            <div class="card-body">
                                <p class="food-text">Sate Madura</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="page3.html">
                        <div class="card">
                            <div class="food-item card-img-top"></div>
                            <div class="card-body">
                                <p class="food-text">Soto Banjar</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <a href="page4.html">
                        <div class="card">
                            <div class="food-item card-img-top"></div>
                            <div class="card-body">
                                <p class="food-text">Nasi Goreng Fatmawati</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="page5.html">
                        <div class="card">
                            <div class="food-item card-img-top"></div>
                            <div class="card-body">
                                <p class="food-text">Bakso Urat Bejo</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="page6.html">
                        <div class="card">
                            <div class="food-item card-img-top"></div>
                            <div class="card-body">
                                <p class="food-text">Bakso Urat Bejo</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
