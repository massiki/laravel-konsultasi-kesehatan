<nav class="navbar navbar-expand-md bg-dark border-bottom border-body sticky-top" data-bs-theme="dark">
    <div class="container">
      <div class="navbar-brand">Logo</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('questions') ? 'active' : ''}}" href="/questions">Questions</a>
          </li>
        </ul>
        <div class="d-flex">
          @guest
            <div>
              <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
            </div>
            <div>
              <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
            </div>
          @else
            <div>
              <a class="btn btn-outline-primary me-2">{{ Auth::user()->role }}</a>
            </div>
            <div>
              <a class="btn btn-outline-primary me-2">{{ Auth::user()->name }}</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="btn btn-outline-primary">Keluar</button>
            </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>