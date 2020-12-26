@extends('layout.master')

@section('content')
<div class="container">
    <h4>Tambah Kriminal</h4>
        <form method="post" action="{{ route('criminal.store') }}" enctype="multipart/form-data" >
            @if(count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
                <form method="post" action="{{ route('criminal.store') }} " >
                    @csrf
                    <table class="table table-stripped text-light">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Kasus</td>
                            <td><input type="text" name="kasus"></td>
                        </tr>
                        <tr>
                            <td>Upload Foto</td>
                            <td><input type="file" class="form-control" name="foto"></td>
                        </tr>
                        
                        <tr>
                            <td>Pidana</td>
                            <td><input type="text" name="pidana"></td>
                        </tr>
                        <tr>
                            <td>Denda</td>
                            <td><input type="text" name="denda"></td>
                        </tr>
                        <tr>    
                            <td>Tgl Penangkapan</td>
                            <td><input type="text" class="date" name="tgl_tangkap"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-light">Simpan</button>
                                <a class="btn btn-light" href="/criminal">Batal</a>
                            </td>
                        </tr>
                    </table>
                </form>
        </form>
    </div>
@endsection
