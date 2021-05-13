
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('todo.create')}}">Aggiungi un to do</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('todo.index')}}">Tutti i To Dos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/todo/attivi">Terminati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          @endauth
          @guest
          <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Entra</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registrati</a>
          </li>
          @endguest

        </ul>
      </div>
    </div>
  </nav>
