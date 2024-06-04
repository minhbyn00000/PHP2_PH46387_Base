@extends('Layouts.master')

@section('title')
    Quản lý người dùng
@endsection

@section('content')

@if (isset($_SESSION['status']) && $_SESSION['status'])
         <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>
    @endif
@php
    unset($_SESSION['status']);
    unset($_SESSION['msg  ']);
@endphp
    @if (isset($_SESSION['status']) && !$_SESSION['status'])
         <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>
    @endif
    @php
    unset($_SESSION['status']);
    unset($_SESSION['msg  ']);
@endphp

    <a href=""></a>
    <table>
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>
                        <img src="{{($user['avatar'])}}" alt="" width="100px">
                    </td>
                    <td>{{ $user['avatar'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['created_at'] }}</td>
                    <td>{{ $user['updated_at'] }}</td>
                    <td>
                      <a href="{{ url("admin/users/$user['id'])""}}" class="btn btn-info">Xem</a>
                      <a href="{{ url("admin/users/{$user['id']}/delete" ) }}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>
@endsection
