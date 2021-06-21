@extends('layouts.index')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Userku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name: </b>{{$userku->name}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$userku->email}}</li>
                    <li class="list-group-item"><b>Role: </b>{{$userku->role}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('userku.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection

