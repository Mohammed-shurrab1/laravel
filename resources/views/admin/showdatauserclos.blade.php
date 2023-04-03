@extends('parent')
@section('cont')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection


<div class="popular_places_area">
    <div class="container">
        <div class="row">
            @foreach ($data as $item)
                @if ($item->status == 'Closed')
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                @if ($item->image == '')
                                    <img src="{{ asset('assets/تنزيل.png') }}" alt="لا توجد صورة">
                                @else
                                    <img src="{{ Storage::url($item->image) }}" alt="لا توجد صورة">
                                @endif
                                <a class="prise">{{ $item->type }}</a>
                                @if ($item->urgent == 0)
                                    <a style="position: absolute;left: 264px;background-color: rgb(29, 0, 244); top: 322px;"
                                        class="prise ">Normal</a>
                                @else
                                    <a style="position: absolute;left: 264px;background-color: red; top: 322px;"
                                        class="prise ">urgent</a>
                                @endif


                            </div>
                            <div class="place_info">
                                <a class="d-flex justify-content-center align-items-center">
                                    <h4>{{ $item->title }}</h4>
                                </a>
                                <p>{{ $item->message }} </p>
                                <div class="rating_days mt-4">
                                    <hr>
                                    <div class="days">


                                        <a class="ml-2" href="#">name:<span
                                                style="color:red">{{ $item->name_student }} </span> </a>|

                                        <a href="#"class="mr-2">number:<span
                                                style="color:red">{{ $item->Your_student_number }} </span> </a>

                                        <a href="#" class="ml-2">email:<span
                                                style="color:red">{{ $item->email }}
                                            </span> </a>

                                    </div>
                                </div>
                            </div>
                            @if ($item->response == '')
                                <form action="{{ route('add_response', $item->id) }}" method="post">
                                    <div class="input-group mb-3">

                                        @csrf
                                        @method('PUT')
                                        <div class="input-group-prepend">

                                            <button type="submit" class="btn btn-danger">Action</button>
                                        </div>
                                        <!-- /btn-group -->
                                        <input name="response" type="text" class="form-control">
                                    </div>
                                </form>
                            @else
                                <p class="text-center mb-4s">{{ $item->response }} </p>
                            @endif
                            <p class="text-center" style="color:rgb(44, 227, 16)">

                                {{ $item->closed_date }}
                            </p>


                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
