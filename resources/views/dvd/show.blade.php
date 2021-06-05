@extends('layouts.index')
@section('content')
    <div class="container mt-5" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail DVD
                </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    {{-- <li class="list-group-item"><img width="100px" src="{{asset('storage/'.$Mahasiswa->foto)}}"></li> --}}
                    <li class="list-group-item"><img width="100px" src="{{ asset('storage/' . $dvd->image_dvd) }}"></li>
                    <li class="list-group-item"><b>Nama DVD     : </b>{{$dvd->nama_dvd}}</li>
                    <li class="list-group-item"><b>Harga DVD    : </b>{{$dvd->harga_dvd}}</li>
                    <li class="list-group-item"><b>Status DVD   : </b>{{$dvd->status_dvd}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('dvd.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection