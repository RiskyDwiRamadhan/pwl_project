@extends('layouts.app')

@section('template')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection
@section('data')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#datetimepicker').datetimepicker();
    });
</script>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Userku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>id_user: </b>{{$userku->id_user}}</li>
                    <li class="list-group-item"><b>email: </b>{{$userku->email}}</li>
                    <li class="list-group-item"><b>username: </b>{{$username->username}}</li>
                    <li class="list-group-item"><b>password: </b>{{$password->password}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('userku.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection