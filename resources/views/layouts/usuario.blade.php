@auth
  <div class="nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('libros.index') }}">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('reservaciones.index') }}">Reservaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('tarifas.index') }}">Tarifas</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
@endauth