@extends('master')
@section('title')
    Danh sach giang vien
@endsection
@section('content')
<a href="/giang-vien/create" class="btn btn-warning">Create</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach ($giangViens as $giangVien)
            <tr>
                <td>{{$giangVien['id']}}</td>
                <td>{{$giangVien['name']}}</td>
                <td>{{$giangVien['email']}}</td>
                <td>{{$giangVien['phone']}}</td>
                <td>
                    <a href="/giang-vien/{{$giangVien['id']}}/update" class="btn btn-warning">Sua</a>
                    <a href="/giang-vien/{{$giangVien['id']}}/delete" 
                    onclick="return confirm('Are you sure')"
                    class="btn btn-warning">Xoa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection