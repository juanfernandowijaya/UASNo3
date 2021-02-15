@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @hasrole('admin')
                <h1>Hi Admin,{{Auth::user()->name}}</h1>
                @endhasrole
                @hasrole('user')
                <h1>Hi User,{{Auth::user()->name}}</h1>
                @endhasrole
                <div class="card-body">
                    @if (session('status'))
                    <div style="text-align:center;" class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div style="text-align: center;" class="d-grid gap-2 d-md-block">
                    <a href="/api/getmahasiswa1">
                        <button class="btn btn-primary" type="button">Show Mahasiswa 1</button>
                    </a>
                    <a href="/api/getmahasiswa2">
                        <button class="btn btn-primary" type="button">Show Mahasiswa 2</button>
                    </a>
                    <a href="/api/getmahasiswa3">
                        <button class="btn btn-primary" type="button">Show Mahasiswa 3</button>
                    </a>
                    <a href="/api/hitungmhs">
                        <button class="btn btn-primary" type="button">Hitung Jumlah Mahasiswa</button>
                    </a>
                </div>
                <a style="margin-top: 10px;text-align:center" href="/api/mahasiswa">
                    <button type="button" class="btn btn-primary btn-lg">Show All Mahasiswa</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection