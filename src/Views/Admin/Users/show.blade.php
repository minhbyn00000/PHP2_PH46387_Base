@extends('Layouts.master')

@section('title')
    Xem Chi Tiết UserName
@endsection

@section('content')
    <table>
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Trường</th>
                    <th>Giá Trị</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($user as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </table>
@endsection
