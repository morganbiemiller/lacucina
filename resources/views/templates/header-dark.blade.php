<nav class="navbar navbar--dark">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/img/new-logo-black.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
            <ul class="nav navbar-nav navbar-right" id="nav">
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/services') }}">Events & Services</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menus <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/horsdoeuvres') }}">Hors D'oeuvres</a></li>
                        <li><a href="{{ url('/salads') }}">Salads</a></li>
                        <li><a href="{{ url('/pans') }}">Pans & platters</a></li>
                        <li><a href="{{ url('/buffets') }}">Buffets</a></li>
                        <li><a href="{{ url('/desserts') }}">Desserts</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>