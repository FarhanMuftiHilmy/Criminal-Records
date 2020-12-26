@extends('layout.master')

@section('content')
<div class="container">
    <h4>Edit Kriminal</h4>
    <form method="post" action="{{ route('criminal.update', $criminal->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $criminal->nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Kasus</label>
            <div class="col-sm-9">
                <input type="text" id="kasus" name="kasus" class="form-control" value="{{ $criminal->kasus }}">
            </div>
        </div>  
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Pidana</label>
            <div class="col-sm-9">
                <input type="text" id="pidana" name="pidana" class="form-control" value="{{ $criminal->pidana }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Denda</label>
            <div class="col-sm-9">
                <input type="text" id="denda" name="denda" class="form-control" value="{{ $criminal->denda }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Tgl Tangkap</label>
            <div class="col-sm-9">
                <input type="text" id="tgl_tangkap" name="tgl_tangkap" class="form-control" value="{{ $criminal->tgl_tangkap }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
                <img src="{{ asset('images/'.$criminal->foto) }}" style="width: 100px">
            </div>
        </div>                    
        <div class="form-group row">
            <label for="judul_kriminal" class="col-sm-3 col-form-label">Ganti foto</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" name="foto">
                <label>*) Apabila Gambar tidak diganti, kosongkan saja.</label>
            </div>
        </div>
        <div class="form-group row">
            
            <div class="col-sm-9">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn btn-warning" href="/criminal">Batal</a>
            </div>
        </div>

        
    </form>
</div>
@endsection
