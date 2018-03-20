<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @for ($i=1; $i<6; $i++)
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('page.show', ['id' => $i])}}">Page {{$i}} <span class="sr-only">(current)</span></a>
                </li>
            @endfor
        </ul>
    </div>
</nav>