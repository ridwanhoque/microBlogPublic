@extends('admin.layout')

@section('content')
<table class="">
    <thead>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        </tr>
    </thead>

    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection