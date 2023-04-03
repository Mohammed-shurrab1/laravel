<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body>


    @foreach ($data as $item)
        @if ($email == $item->email)
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>image</th>
                                        <th>title</th>
                                        <th>message</th>
                                        <th>student_university_id</th>
                                        <th>student_name</th>
                                        <th>student_email</th>

                                        <th>type</th>

                                        <th>status</th>
                                        <th>response</th>
                                        <th>closed_date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td > <img style="width: 50px;" src="{{ Storage::url($item->image) }}" alt="لا توجد صورة"></td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->Your_student_number }}</td>
                                        <td>{{ $item->name_student }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->response }}</td>
                                        <td>{{ $item->closed_date }}</td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        @else
            <h1> لا توجد بيانات لعرضه</h1>
        @endif
    @endforeach


    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>


</body>
