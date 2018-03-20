@extends('index')
@section('content')
    <br>
    <h4 class="text-center">Page {{$id}}</h4>

    @if(session()->has('message.level'))
        <div class="alert alert-{{ session('message.level') }}">
            {!! session('message.content') !!}
        </div>

    @endif

    <form class="order-form" method="post" action="{{route('order.store')}}">

        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Order</button>
    </form>
@endsection