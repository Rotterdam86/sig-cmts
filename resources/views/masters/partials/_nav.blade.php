<nav class="navbar navbar-expand-lg static-top navbar-default bg-light" aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
             <ul class="nav nav-pills nav-fill">
                <li class="nav-item" role="presentation">
                     <a class="nav-link {{ set_active_route('cmts_path') }}" href="{{ route('cmts_path') }}">Pr&eacute;sentation</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Fichier</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a class="dropdown-item" href="{{ route('root_path') }}">Pays</a></li>
                        <li><a class="dropdown-item" href="#">Ville</a></li>
                        <li><a class="dropdown-item" href="#">Localité</a></li>
                        <li><a class="dropdown-item" href="#">Patient</a></li>
                        <li><a class="dropdown-item" href="#">Agent</a></li>
                        <li><a class="dropdown-item" href="#">Spécialité</a></li>
                        <li><a class="dropdown-item" href="#">Pays</a></li>
                        <li><a class="dropdown-item" href="#">Ville</a></li>
                        <li><a class="dropdown-item" href="#">Localité</a></li>
                        <li><a class="dropdown-item" href="#">Patient</a></li>
                        <li><a class="dropdown-item" href="#">Agent</a></li>
                        <li><a class="dropdown-item" href="#">Spécialité</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Cartographie</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Pays</a></li>
                        <li><a class="dropdown-item" href="#">Ville</a></li>
                        <li><a class="dropdown-item" href="#">Localité</a></li>
                        <li><a class="dropdown-item" href="#">Patient</a></li>
                        <li><a class="dropdown-item" href="#">Agent</a></li>
                        <li><a class="dropdown-item" href="#">Spécialité</a></li>
                        <li><a class="dropdown-item" href="#">Pays</a></li>
                        <li><a class="dropdown-item" href="#">Ville</a></li>
                        <li><a class="dropdown-item" href="#">Localité</a></li>
                        <li><a class="dropdown-item" href="#">Patient</a></li>
                        <li><a class="dropdown-item" href="#">Agent</a></li>
                        <li><a class="dropdown-item" href="#">Spécialité</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Traitement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edition</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active_route('contact_path') }}" href="{{ route('contact_path') }}">Contacts</a>
                </li>  
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>  
            </ul>
            <!--<form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
        </div>
  </div>
</nav>
