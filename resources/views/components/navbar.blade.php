<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #6C7ABB;" background-repeat: no-repeat; background-position: center; max-width: 1200px; margin: 0 auto;>
    <a class="navbar-brand" href="#">
    <img src="img/LogoITB.png" width="163" height="45" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="{{ url('/about')}}" role="button" data-toggle="dropdown" aria-expanded="false">
          About
          </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/about#sejarah')}}">Sejarah</a>
              <a class="dropdown-item" href="{{ url('/about#visi-misi')}}">Visi Misi</a>
              <a class="dropdown-item" href="{{ url('/about#struktur')}}">Struktur</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="{{ url('/akademik')}}" role="button" data-toggle="dropdown" aria-expanded="false">
          Akademik
          </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/akademik#peresmian')}}">Peresmian</a>
              <a class="dropdown-item" href="{{ url('/akademik#konsentrasi')}}">Konsentrasi</a>
              <a class="dropdown-item" href="{{ url('/akademik#biaya')}}">Biaya</a>
              <a class="dropdown-item" href="{{ url('/akademik#persyaratan')}}">Persyaratan</a>
            </div>
          </li>
            <a class="nav-link" href="#">Penghargaan</a>
            <a class="nav-link" href="#">Media</a>
        </div>
    </div>
</nav>