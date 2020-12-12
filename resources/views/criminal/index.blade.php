@extends('layout.master')

@section('content')
    <div class="container">
        @if(Session::has('pesan'))
            <div class="alert alert-success">{{Session::get('pesan')}}</div>
        @endif
        <h4>Data Kriminal</h4>
        <p align="right">
            <a href="{{ route('criminal.create') }}" class="btn btn-secondary">
                Tambah Kriminal
            </a>                
        </p>
        <form action="{{ route('criminal.search') }}" method="get">@csrf
            <input type="text" name="kata" class="form-control" placeholder="Cari..." style="width:30%; display:inline; margin-top:10px; margin-bottom:10px; float:right;">
        </form>
        <table class="table table-striped text-light">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Kasus</th>
                    <th>Pidana Denda</th>
                    <th>Tgl. Penangkapan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_criminal as $criminal)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $criminal->nama }}</td>
                        <td><img src="{{ $criminal->foto != null ? asset('images/'.$criminal->foto) : asset('image-not-found.jpg') }}" style="width: 100px"></td>
                        <td>{{ $criminal->kasus }}</td>
                        <td>{{ $criminal->pidana }}</td>
                        <td>{{ $criminal->tgl_tangkap->format('d/m/Y') }}</td>
                        <td>
                            <form action="{{ route('criminal.destroy',$criminal->id)}}" method="post">
                                @csrf
                                <a href="{{ route('criminal.edit',$criminal->id)}}" class="btn btn-secondary">Ganti</a>
                                <button type="submit" class="btn btn-warning" onClick="return confirm('Apakah anda yakin menghapus?')">
                                    Hapus
                                </button>
                            </form>                                
                        </td>
                        
                        
                    </tr>
                @endforeach
                </tbody>
        </table>    
        <div>
            <div class="kiri"><strong>Jumlah Kriminal: {{ $jumlah_kriminal }}</strong></div>
            <div class="kanan">{{ $data_criminal->links() }}</div>
        </div>
    </div>
@endsection
