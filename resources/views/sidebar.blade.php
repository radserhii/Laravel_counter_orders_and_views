<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @for ($i=1; $i<6; $i++)
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('page', ['id' => $i])}}">Page {{$i}} <span class="sr-only">(current)</span></a>
                </li>
            @endfor
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{route('page', ['id' => 1])}}">Page 1 <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{route('page', ['id' => 2])}}">Page 2 <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{route('page', ['id' => 3])}}">Page 3 <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{route('page', ['id' => 4])}}">Page 4 <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{route('page', ['id' => 5])}}">Page 5 <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
        </ul>
    </div>
</nav>