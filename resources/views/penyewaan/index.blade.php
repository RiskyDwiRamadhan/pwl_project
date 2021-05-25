@extends('layouts.app')

@section('content')
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Penyewaan DVD</h2>
        </div>
        
        <!-- Form Search -->
        <div class="float-left my-2">
            <form action="{{ route('sewa.index') }}" method="GET">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                    </span>
                </div>
            </form>
        </div>
        <!-- End Form Search -->

        <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('sewa.create') }}"> Input DVD</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered" enctype="multipart/form-data">
    <tr>
        <th>Image</th>
        <th>Nama DVD</th>
        <th>Harga DVD</th>
        <th>Status DVD</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($penyewaan as $sewa)
            <tr>
                <td><img width="100px" src="{{$sewa->image_dvd}}"></td>
                <td>{{ $sewa->nama_dvd }}</td>
                <td>{{ $sewa->harga_dvd}}</td>
                <td>{{ $sewa->status_dvd }}</td>
                <td>
                    <form action="{{ route('sewa.destroy',$sewa->id_penyewaan) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('sewa.show',$sewa->id_penyewaan) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('sewa.edit',$sewa->id_penyewaan) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>                        
                    </form>
                </td>
            </tr>
        @endforeach
</table>            

        <div class="d-flex">
            {{ $penyewaan->links() }}
        </div> 
@endsection