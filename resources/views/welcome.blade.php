@extends('layouts.app')

@section('content')
<section class="main-section">
    <div class="container">
        <div class="content-wrapper text-center py-5">
            <h1 class="display-4 mb-4">CONNECT PRIVATELY WITH CRUSH</h1>
            <h2 class="h3 mb-5">INFLUENCERS AND MODELS</h2>
            <button class="btn btn-primary btn-lg">Sign Up</button>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/test/group4.png') }}" class="card-img-top" alt="Influencer 1">
                    <div class="card-body">
                        <h5 class="card-title">Emily</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/test/group4.png') }}" class="card-img-top" alt="Influencer 2">
                    <div class="card-body">
                        <h5 class="card-title">Emily</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>