@extends('index')
@section('content')
    <br>
    <h4 class="text-center">Page {{$id}}</h4>
    <form class="order-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone">
        </div>
        <button type="submit" class="btn btn-primary">Order</button>
    </form>
@endsection