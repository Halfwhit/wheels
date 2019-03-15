<nav dusk="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Whittington's Wheels</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="/showroom">Showroom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/Halfwhit/wheels">Github</a>
            </li>
        </ul>
            @auth
                <a class="btn btn-outline-secondary my-2 my-sm-0" type="button" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="btn btn-outline-secondary my-2 my-sm-0" type="button" href="{{ route('login') }}">Login</a>
            @endauth
    </div>
</nav>
