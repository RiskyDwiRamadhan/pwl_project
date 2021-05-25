@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Data DVD
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('dvd.update', $dvd->id_dvd) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="file" class="form-control" required="required" name="image" value="{{$dvd->image_dvd}}">
                            <img width="100px" src="{{asset('storage/'.$dvd->image_dvd)}}">
                        </div>
                        <div class="form-group">
                            <label for="id_dvd">ID DVD</label>
                            <input value="{{ $dvd->id_dvd }}" type="text" name="id_dvd" class="form-control" id="id_dvd" aria-describedby="id_dvd" >
                        </div>
                        <div class="form-group">
                            <label for="nama_dvd">Nama DVD</label>
                            <input value="{{ $dvd->nama_dvd }}" type="nama_dvd" name="nama_dvd" class="form-control" id="nama_dvd" aria-describedby="nama_dvd" >
                        </div>
                        <div class="form-group">
                            <label for="harga_dvd">Harga DVD</label>
                            <input value="{{ $dvd->harga_dvd }}" type="harga_dvd" name="harga_dvd" class="form-control" id="harga_dvd" aria-describedby="harga_dvd" >
                        </div>
                        <div class="form-group">
                            <label for="status_dvd">status_dvd</label> 
                            <select type="status_dvd" name="status_dvd" class="form-control" id="status_dvd">
                                <option value="Di Pinjam" >Di Pinjam</option>
                                <option value="Belum Pinjam" >Belum Pinjam</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
