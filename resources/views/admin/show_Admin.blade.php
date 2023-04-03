@extends('parent')
@section('cont')
    <div class="card-body table-responsive p-0 container">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td><a href="{{ route('edit', $item->id) }}">Edit</a></td>




                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
