<nav class="navbar navbar-expand-lg fixed-top  navbar-dark" color-on-scroll="300">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">MY JOURNAL</a>
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#homepage" class="nav-link"><i class="nc-icon nc-layout-11"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="#why" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>Journal Prompts</a>
                </li>
                @can('login')
                <li class="nav-item">
                    <a href="{{route('actionlogout')}}" class="nav-link"><i class="fa fa-power-off"></i> Log Out</a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</nav>