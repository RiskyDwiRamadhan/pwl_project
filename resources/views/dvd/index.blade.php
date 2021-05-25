@extends('layouts.app')

@section('content')
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data DVD</h2>
        </div>
        
        <!-- Form Search -->
        <div class="float-left my-2">
            <form action="{{ route('dvd.index') }}" method="GET">
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
        <a class="btn btn-success" href="{{ route('dvd.create') }}"> Input DVD</a>
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
        @foreach ($dvd as $DVD)
            <tr>
                <td><img width="100px" src="{{$DVD->image_dvd}}"></td>
                <td>{{ $DVD->nama_dvd }}</td>
                <td>{{ $DVD->harga_dvd}}</td>
                <td>{{ $DVD->status_dvd }}</td>
                <td>
                    <form action="{{ route('dvd.destroy',$DVD->id_dvd) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('dvd.show',$DVD->id_dvd) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('dvd.edit',$DVD->id_dvd) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>                        
                    </form>
                </td>
            </tr>
        @endforeach
</table>            

        <div class="d-flex">
            {{ $dvd->links() }}
        </div> 
@endsection