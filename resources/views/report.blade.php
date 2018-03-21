@extends('index')
@section('content')
    <br><br>
    <h3>"Orders/Visitors" pages coefficients</h3>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Page</th>
            <th scope="col">Yesterday</th>
            <th scope="col">Today</th>
            <th scope="col">Week</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pages as $page)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>Page number {{$page->id}}</td>
                <td>{{$page->yesterday_cr}}</td>
                <td>{{$page->today_cr}}</td>
                <td>{{$page->week_cr}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection