@extends('layout.master')

@section('content')



<section id="criminal" class="py-5 text-center bg-dark text-light">
    <div class="container">
      <h2>Daftar Kriminal</h2>
      <hr>
      <div class="row">
        @foreach ($criminal as $data)
        <div class="col-md-4">
            <a href="#">
            <img src="{{ $data->foto != null ? asset('images/'.$data->foto) : asset('image-not-found.jpg') }}" style="width:120px; height:150px">
            <p>
                <h5>{{ $data->nama }}</h5></a>
                (Kasus : {{ $data->kasus }})
            </p>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection