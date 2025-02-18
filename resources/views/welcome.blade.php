@extends('layouts.app')

@section('content')
    <section class="hero-section"
        style="background: url('{{ Vite::asset("resources/images/bg.png") }}') no-repeat center center/cover;">
        <div class="container-fluid mt-5">
            <div class="d-flex  justify-content-between">
                <div class="d">
                    <a href="" class="" style="margin-left: 70px;">
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
                        <div class="col-2" style="margin-top: 250px;">
                            <a href="">
                                <img src="{{ Vite::asset('resources/images/Rectangle 10.png') }}" class="img-fluid " alt="">
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
                        <div class="col-2 d-flex align-items-start justify-content-end" style="margin-top: 250px;">
                            <a href="">
                                <img src="{{ Vite::asset('resources/images/Rectangle 9.png') }}" class="img-fluid w-100"
                                    alt="">
                            </a>
                        </div>

                        <section style="background-color:rgb(238, 169, 225); padding: 20px; margin-top: 60px;">
                            <div class="conatiner">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-5 fs-2">
                                            <a href="" class="" style="margin-left: 70px;">
                                                <img src="{{ Vite::asset("resources/images/4.png") }}" alt="">
                                            </a>
                                        </div>
                                        <div class="mt-5 fs-2">
                                            <a href="" class="" style="margin-left: 70px;">
                                                <img src="{{ Vite::asset("resources/images/3.png") }}"
                                                    style="width: 130%; height: auto;" alt="">
                                            </a>
                                        </div>
                                        <div class="mt-5 fs-2">
                                            <a href="" class="" style="margin-left: 70px;">
                                                <img src="{{ Vite::asset("resources/images/6.png") }}"
                                                    style="width: 130%; height: auto;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <a href="" style="margin-left: 70px;" class="ms-5">
                                            <img src="{{ Vite::asset('resources/images/cards.png') }}"
                                                style="width: 100%; height: auto;" alt="">
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="mt-5 mb-">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <div class="mt-5 fs-2">
                                        <a href="" class="" style="margin-left: 30px;">
                                            <img src="{{ Vite::asset("resources/images/heart.png") }}" alt="">
                                        </a>
                                        <a href="" class="ms-5">
                                            <img src="{{ Vite::asset("resources/images/heading.png") }}" alt="">
                                        </a>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <a href="" class="">
                                            <img src="{{ Vite::asset("resources/images/Group 45.png") }}"
                                                style="width: 90%; height: auto;" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            style="background: url('{{ Vite::asset("resources/images/Rectangle 20.png") }}') no-repeat center center/cover; height: 152vh;">
                            <div class="container">
                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <div class="mt-5 fs-2">
                                            <a href="" class="">
                                                <img src="{{ Vite::asset("resources/images/text.png") }}" alt="">
                                            </a>
                                        </div>
                                        <div class="mt-5 fs-2">
                                            <a href="" class="">
                                                <img src="{{ Vite::asset("resources/images/9.png") }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-5 fs-2">
                                            <a href="" class="" style="margin-left: 90px;">
                                                <img src="{{ Vite::asset("resources/images/heart2.png") }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="mt-5 text-center">
                                            <a href="" class="">
                                                <img src="{{ Vite::asset("resources/images/Group 65.png") }}"
                                                    style="width: 700%; height: auto;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center text-center">
                                    <div class="col-md-6"> <!-- col-6 ko col-md-6 banaya for responsiveness -->
                                        <div class="mt-5 mb-4">
                                            <div class="mt-5">
                                                <a href="">
                                                    <img src="{{ Vite::asset('resources/images/5.png') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="mt-3 mb-5">
                                                <a href="">
                                                    <img src="{{ Vite::asset('resources/images/jion.png') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </section>


                        <section>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <a href="">
                                                <img src="{{ Vite::asset('resources/images/Group 52.png') }}"
                                                    style="width: 100%; height: auto;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <a href="">
                                                <img src="{{ Vite::asset('resources/images/Group 66.png') }}"
                                                    style="width: 100%; height: auto;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="">
                                            <a href="">
                                                <img src="{{ Vite::asset('resources/images/Group 67.png') }}"
                                                    style="width: 100%; height: auto;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>




        </div>
        </div>
    </section>
    /


@endsection