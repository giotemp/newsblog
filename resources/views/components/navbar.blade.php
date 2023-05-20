<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Blog News</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">Il mio profilo</a>
          </li>
          @if (Auth::user())
          @if (Auth::user()->isAdmin())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Azioni
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('tag.create')}}">Crea un nuovo tag</a></li>
              <li><a class="dropdown-item" href="{{route('article.create')}}">Crea un nuovo articolo</a></li>
            </ul>
          </li>
          @endif
    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a></li>
              <form id="form-logout" action="{{ route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>