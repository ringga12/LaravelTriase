@extends('templates.template')


@section('meta')
    <link rel="stylesheet" href="{{ url('css/home_style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
@endsection


@section('title')
    Test
@endsection


@section('navbar')
    <header class="navbar sticky-top navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link" href="#">Course</a>
                <a class="nav-item nav-link" href="#">Contact</a>
                <a class="nav-item nav-link" href="#">About</a>
            </div>
        </div>
    </header>
@endsection


@section('content')
    <div class="container float-left">
        <div class="row">
            <div class="col-md-auto">
                <img class="img-desert" src="{{ url('pic/desert.png') }}" alt="">
            </div>
            <div class="col-md-auto">
                <img  class="img-logo" src="{{ url('pic/logo.png') }}" alt="">
                <p class="definition">A web based natural disaster education portal that will 
                    help people to prepare themselves when a disaster occurs.</p>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">start the educational courses before its too late</p>
                    <hr class="in-card">
                    <a  class="link-box" href="{{ route('login') }}"> 
                        <p class="learn-now">Learn Now</p> 
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection