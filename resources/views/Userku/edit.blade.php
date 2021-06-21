@extends('layouts.index')

@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">
        <div class="container mt-10">

            <div class="row justify-content-center align-items-center">
                <div class="card" style="width: 24rem;">
                    <div class="card-header">
                        User
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
                        <form method="post" action="{{ route('userku.update', $userku->id) }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" class="form-control" id="name" aria-describedby="name" value="{{$userku->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="{{$userku->email}}">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" aria-describedby="password">
                            </div>
                            <div>
                                <label for="role" >Role</label>

                                <div class="col-md-6">
                                    <select name="role" id="role" class="form-control">
                                        <option value="">--Pilih Role--</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="customer">Customer</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            <a class="btn btn-success btn-sm btn-block mt-2" href="{{ route('userku.index') }}">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
@endsection