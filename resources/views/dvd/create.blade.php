@extends('layouts.index')

@section('title')
DVD-Create
@endsection

@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content mt-5">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Form DVD</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Create DVD</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card mb-9">
                            <div class="card-header">
                                <h3><i class="far fa-file-alt"></i> Form DVD</h3>
                            </div>
                
                            <div class="card-body">

                                <form method="post" action="{{ route('dvd.store') }}" id="myForm" enctype="multipart/form-data" data-parsley-validate novalidate>                                    
                                    @csrf
                                    <div class="form-group">
                                        <label for="image">Foto: </label>
                                        <input type="file" class="form-control" required="required" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_dvd">ID DVD<span class="text-danger">*</span></label>
                                        <input type="text" name="id_dvd" data-parsley-trigger="change" required class="form-control" id="id_dvd">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_dvd">Nama DVD<span class="text-danger">*</span></label>
                                        <input type="text" name="nama_dvd" data-parsley-trigger="change" required placeholder="Masukkan Nama DVD" class="form-control" id="nama_dvd">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_dvd">Harga DVD<span class="text-danger">*</span></label>
                                        <input type="text" name="harga_dvd" data-parsley-trigger="change" required placeholder="Masukkan Harga DVD" class="form-control" id="harga_dvd">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok DVD<span class="text-danger">*</span></label>
                                        <input type="text" name="stok" data-parsley-trigger="change" required placeholder="Masukkan Harga DVD" class="form-control" id="stok">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_dvd">Status DVD<span class="text-danger">*</span></label>
                                        <input type="text" name="status_dvd" data-parsley-trigger="change" required placeholder="Masukkan Status DVD" class="form-control" id="status_dvd">
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary" type="submit">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary m-l-5">
                                            Cancel
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div><!-- end card-->
                    </div>
                </div>

            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

        <script src="{{ asset('Nura Admin/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('Nura Admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('Nura Admin/assets/js/moment.min.js') }}"></script>

        <script src="{{ asset('Nura Admin/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('Nura Admin/assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('Nura Admin/assets/js/detect.js') }}"></script>
        <script src="{{ asset('Nura Admin/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('Nura Admin/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('Nura Admin/assets/js/jquery.nicescroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('Nura Admin/assets/js/admin.js') }}"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="{{ asset('Nura Admin/assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script>
    $(function() {
        var $sections = $('.form-section');

        function navigateTo(index) {
            // Mark the current section with the class 'current'
            $sections
                .removeClass('current')
                .eq(index)
                .addClass('current');
            // Show only the navigation buttons that make sense for the current section:
            $('.form-navigation .previous').toggle(index > 0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);
        }

        function curIndex() {
            // Return the current index by looking at which section has the class 'current'
            return $sections.index($sections.filter('.current'));
        }

        // Previous button is easy, just go back
        $(document).on( "click", ".form-navigation .previous", function() {             
            navigateTo(curIndex() - 1);
        });

        // Next button goes forward iff current block validates
        $(document).on( "click", ".form-navigation .next", function() {      
            $('.demo-form').parsley().whenValidate({
                group: 'block-' + curIndex()
            }).done(function() {
                navigateTo(curIndex() + 1);
            });
        });

        // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
        $sections.each(function(index, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + index);
        });
        navigateTo(0); // Start at the beginning
    });


    $('#form').parsley();
    </script>
    <!-- END Java Script for this page -->



@endsection
