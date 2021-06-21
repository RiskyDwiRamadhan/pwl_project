@extends('layouts.index')
@section('title')
Admin-user
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">user</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">user</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <span class="pull-right"><a href="{{ route('userku.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add user</a></span>
                            <h3><i class="far fa-file-alt"></i> Form user</h3>
                        </div>
                        
                        <div class="mt-3 btn-sm" style="width:310px">
                            <form action="{{ route('userku.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari user....">
                                    <button type="submit" class="btn btn-primary">
                                        Cari
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-header -->

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="50px">#</th>
                                                <th width="280px">Name</th>
                                                <th width="280px">Email</th>
                                                <th width="100px">Role</th>
                                                <th width="100px">Action</th>
                                            </tr>
                                        </thead>
                                    @php $no = 1; @endphp
                                    @foreach ($userku as $user)
                                        <tbody>

                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email}}</td>
                                                <td>{{ $user->role }}</td>
                                                <!-- <td>{{ $user->stok }}</td> -->
                                                <td>
                                                    <form action="{{ route('userku.destroy',$user->id) }}" method="POST">
                                
                                                        <a class="btn btn-info btn-sm btn-block" href="{{ route('userku.show',$user->id) }}">Show</a>
                                                        <a class="btn btn-primary btn-sm btn-block" href="{{ route('userku.edit',$user->id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm btn-block mt-2" onclick="return confirm('Anda yakin ingin meghapus data ini ?')">Delete</button>                        
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach   
                                    </table>
                                </div>
                            </div> 
                            <!-- end card-body -->

                            <div class="d-flex">
                                {{ $userku->links() }}
                            </div> 
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection 