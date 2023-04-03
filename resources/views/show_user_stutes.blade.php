<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class=" col-12  justify-content-center" style="">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Find a complaint response
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('show_user') }}" method="get">
                
            @if ($errors->any())
                <br>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach

                    </ul>
                </div>
            @endif
                
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">order number </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter id" name="ss">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">email </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email" name="email">
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>
