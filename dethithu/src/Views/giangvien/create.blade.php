@extends('master')
@section('title')
    them moi giang vien
@endsection
@section('content')
<form action="" method="POST">
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">phone:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/giang-vien/" class="btn btn-primary"> Danh sach</a>
  </form>
@endsection