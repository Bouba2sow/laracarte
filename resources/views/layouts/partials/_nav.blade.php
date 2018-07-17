<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="{{route('home_path')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="nav navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home_path')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about_path')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Artisan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="#">laravel.com</a>
          <a class="dropdown-item" href="#">laravel.io</a>
          <a class="dropdown-item" href="#">Laracastes</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Contact</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right ml-auto ">
      <li class="nav-item">
        <a class="nav-link" href="#">Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
    </ul>
    
  </div>
  </div>
</nav>