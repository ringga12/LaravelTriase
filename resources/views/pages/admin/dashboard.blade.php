@extends('templates.template')


@section('meta')
    <link rel="stylesheet" href="{{ url('css/admin_style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
@endsection


@section('title')

@endsection


@section('navbar')
    <header class="nav sticky-top top-nav">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-navbar" src="{{ asset('pic/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <a href=""><img class="rounded-circle" src="{{ asset('pic/desert.png') }}" alt=""></a>
            <p>Admin</p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="container">
            <nav class="flex-column sticky-top sticky-offset">
                <a href="" class="nav-item dashboard">
                    <img src="{{ asset('pic/dashboard.png') }}" alt=""><span>Dashboard</span>
                </a>
                <a href="" class="nav-item edit-course">
                    <img src="{{ asset('pic/contract.png') }}" alt=""><span>Edit Course</span>
                </a>
            </nav>
            </div>

@endsection


@section('content')
            <div class="col">
                <table class="table table-borderless">
                    <thead>
                        <tr class="table-active">
                            <th>
                                Jenis Bencana Alam
                            </th>
                            <th>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle float-right" type="button" id="month_picker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {!! date("M") !!}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="month_picker">
                                        @foreach($bulan as $nama_bulan)
                                            <button class="dropdown-item" type="button">{{ $nama_bulan }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div id="app">
                                    {!! $jenis_bencana->container() !!}
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/vue"></script>
                                <script>
                                    var app = new Vue({
                                    el: '#app',
                                    });
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                                {!! $jenis_bencana->script() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table table-borderless">
                    <thead>
                        <tr class="table-active">
                            <th>
                                Pendaftar
                            </th>
                            <th>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle float-right" type="button" id="month_picker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {!! date("M") !!}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="month_picker">
                                        @foreach($bulan as $nama_bulan)
                                            <button class="dropdown-item" type="button">{{ $nama_bulan }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div id="app">
                                    {!! $jumlah_pendaftar->container() !!}
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/vue"></script>
                                <script>
                                    var app = new Vue({
                                    el: '#app',
                                    });
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                                {!! $jumlah_pendaftar->script() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <table class="table table-borderless">
                    <thead>
                        <tr class="table-active">
                            <th>
                                Level Pengguna
                            </th>
                            <th>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle float-right" type="button" id="month_picker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {!! date("M") !!}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="month_picker">
                                        @foreach($bulan as $nama_bulan)
                                            <button class="dropdown-item" type="button">{{ $nama_bulan }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div id="app">
                                    {!! $level_pengguna->container() !!}
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/vue"></script>
                                <script>
                                    var app = new Vue({
                                    el: '#app',
                                    });
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                                {!! $level_pengguna->script() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table table-borderless">
                    <thead>
                        <tr class="table-active">
                            <th>
                                Badges
                            </th>
                            <th>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle float-right" type="button" id="month_picker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {!! date("M") !!}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="month_picker">
                                        @foreach($bulan as $nama_bulan)
                                            <button class="dropdown-item" type="button">{{ $nama_bulan }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div id="app">
                                    {!! $badges->container() !!}
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/vue"></script>
                                <script>
                                    var app = new Vue({
                                    el: '#app',
                                    });
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                                {!! $badges->script() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
