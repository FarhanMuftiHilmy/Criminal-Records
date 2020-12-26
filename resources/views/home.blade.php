@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-secondary">Dashboard</div>

                <div class="card-body text-white bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    You are logged in!
                    <br>
                    <br>
                    <a href="{{ url('/') }}" class="btn btn-secondary">Ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
