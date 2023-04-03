@extends('parent')
@section('cont')
    <h1 class="d-flex justify-content-center align-items-center text-success">Welcome Adaim</h1>
    <div style="height:400px;" class="card-body table-responsive p-0 d-flex justify-content-center align-items-center">

        <div class="col-md-4 col-sm-6 col-12 ">
            <div class="info-box ">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                <div class="info-box-content ">

                    <span class="info-box-number">المشرف:{{auth('adminlogen')->user()->name}}</span>
                    <span class="info-box-text"> الايميل:{{auth('adminlogen')->user()->email}}</span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
@endsection
