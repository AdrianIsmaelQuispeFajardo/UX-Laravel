<nav class="navbar navbar-expand-md" style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img id="logo" src="{{asset('assets/img/logo_negro.svg')}}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route ('search')}}">Buscar sílabos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('upload')}}">Subir sílabos</a>
        </li>
      </ul>
      <form class="d-flex" role="button">
        
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
          @if (Route::has('login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">Salir</a>
                  @else
                      <a href="{{ route('login') }}" class="btn btn-outline-primary">Acceder</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrarse</a>
                      @endif
                  @endauth
              </div>
          @endif
          </div>
      </form>
    </div>
  </div>
</nav>
<script>

  var logo = document.getElementById("logo");

  logo.onclick = function() {
      window.location.href = "{{ route('search') }}";
  };
</script>
