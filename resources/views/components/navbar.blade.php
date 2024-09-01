<nav class="navbar navbar-expand-lg ">
    <div class="container mx-3">
      <a class="navbar-brand text-white mx-3 fs-5" href="#">Art</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white mx-3" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @auth
          <li class="nav-item" >
            <a class="nav-link  text-white mx-3" href="{{route('art.create')}}">Visit</a>
          </li>
          @endauth
          
          <li class="nav-item">
            <a class="nav-link  text-white mx-3" href="#">Featured</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white mx-3" href="{{route('register')}}">Registrati qui</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white mx-3" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white mx-3" href="{{route('profile')}}">Profile</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link  text-white mx-3" href="{{route('login')}}">Login</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white mx-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artists
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Contemporary</a></li>
              <li><a class="dropdown-item" href="#">Astract</a></li>
              <li><a class="dropdown-item" href="#">Historic Art</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<div class="sec-navbar d-flex justify-content-center pt-4" style="background:url('https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/.width-1440_tlLiq8z.jpg')">
    <p class="mx-5 fs-5">New York</p>
    <p class="mx-5 fs-5 fw-bold text-dark">Paris</p>
    <p class="mx-5 fs-5">Milan</p>
    <p class="mx-5 fs-5 fw-bold">London</p>
</div>
