<!--Navbar -->
<nav class="navbar navbar-expand-xl navbar-dark info-color scrolling-navbar">
    <a class="navbar-brand" href="{{url('/')}}">QUIERO A MI MASCOTA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link" href="{{url('nosotros')}}">
                <i class="fas fa-home fa-lg blue-text pr-3"></i> Nosotros 
            </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('productos_perros')}}">
                    <i class="fas fa-dog fa-lg white-text pr-3"></i> Perros 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('productos_gatos')}}">
                    <i class="fas fa-cat fa-lg yellow-text pr-3"></i> Gatos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contactos')}}"> 
                    <i class="fas fa-phone-square-alt fa-lg green-text pr-3"></i>Contactos
                </a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->