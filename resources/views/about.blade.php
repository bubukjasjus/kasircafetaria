@extends('layout.master')

@section('content')
    <section class="about-section py-5 text-center">
        <div class="container">
            <h2 class="mb-4">About Us</h2>
            <p class="lead">We are three passionate students on a mission to create an innovative e-commerce platform. Our
                vision is to make local collage delicacies easily accessible to everyone, especially for those who prefer to
                order online.</p>
        </div>
    </section>


    <section class="team-section py-5 ">
        <div class="container">
            <h3 class="mb-4 text-center">Meet the Team</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Harry</h5>
                            <p class="card-text">Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Tata</h5>
                            <p class="card-text">Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">farhan</h5>
                            <p class="card-text">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="vision-mission py-5 ">
        <div class="container">
            <h3 class="text-center mb-4">Our Vision & Mission</h3>
            <div class="row">
                <div class="col-md-6">
                    <div style="background-color: #E9C46A" class="p-3  text-dark rounded">
                        <h4>Vision</h4>
                        <p>To become a leading platform that connects food lovers with the best local eateries.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background-color: #E76F51;" class="p-3  text-white rounded">
                        <h4>Mission</h4>
                        <p>To provide an easy, convenient way for people to enjoy their favorite foods while supporting
                            small businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
