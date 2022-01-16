@extends('templates.template')


@section('meta')
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
@endsection


@section('title')
    Login
@endsection


@section('navbar')
    <header class="nav sticky-top">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-navbar" src="{{ asset('pic/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
@endsection


@section('content')
    <div classs="container">
        <div class="card">
            <img src="{{ asset('pic/desert.png') }}" alt="">
            <div class="card-body">
                <div class="card-title">Sign In To Ziaga</div>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label class="email-label" for="email">Email Address</label>
                        <input type="email" class="form-control email-input" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="pw-label" for="password">Password</label>
                        <input type="password" class="form-control pw-input" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Sign In</button>
                </form>
            </div>
        </div>
        <hr class="bridge">
        <div class="float-right">
            <h2>New To Ziaga?</h2>
            <p> <a href="">Create an account</a> to use our features.</p>
        </div> 
    </div>
@endsection