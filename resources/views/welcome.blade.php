@extends('layouts.app')

@section('content')
    <section class="hero-section"
        style="background: url('{{ Vite::asset("resources/images/bg.png") }}') no-repeat center center/cover;">
        <div class="container-fluid mt-5">
            <div class="d-flex  justify-content-between">
                <div class="d">
                    <a href="" class=""  style="margin-left: 70px;">
                        <img src="{{ Vite::asset("resources/images/send.png") }}" alt="">
                    </a>
                </div>
                <div class="mt-3">
                    <a href="" class="ms-4">
                        <img src="{{ Vite::asset("resources/images/feed.png") }}" alt="">
                    </a>
                    <a href="" class="ms-5">
                        <img src="{{ Vite::asset("resources/images/create.png") }}" alt="">
                    </a>
                    <a href="" class="ms-5" style="margin-right: 70px;">
                        <img src="{{ Vite::asset("resources/images/signin.png") }}" alt="">
                    </a>
                </div>
            </div>

            <!-- Hero Text -->
                <div class="row vh-100 d-flex align-items-center justify-content-center text-center">
                    <div class="col-md-8 text-white" style="margin-top: 200px;">
                        <h1 class="hero-title">CONNECT PRIVATELY WITH CRUSH INFLUENCERS AND MODELS</h1>
                        <a href="">
                            <img src="{{ Vite::asset("resources/images/signin.png") }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="row position-relative ">
                            <!-- Left Box -->
                            <div class="col-2" style="margin-top: 200px;">
                                <a href="">
                                    <img src="{{ Vite::asset('resources/images/Rectangle 10.png') }}"
                                        class="img-fluid " alt="">
                                </a>
                            </div>
        
                            <!-- Center Images -->
                            <div class="col-8 position-relative text-center">
                                <a href="">
                                    <img src="{{ Vite::asset('resources/images/Group 21.png') }}" class="img-fluid w-100"
                                        alt="">
                                </a>
                            </div>
        
                            <!-- Right Box -->
                            <div class="col-2 d-flex align-items-start justify-content-end"  style="margin-top: 200px;">
                                <a href="">
                                    <img src="{{ Vite::asset('resources/images/Rectangle 9.png') }}" class="img-fluid w-100"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
        </div>
    </section>
@endsection