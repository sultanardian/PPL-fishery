<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Hasil Laut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        @guest
        <li class="nav-item">
          <a class="nav-link @yield('beranda-active')" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('login-active')" href="{{ route('login') }}">Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('register-active')" href="{{ route('register') }}">Daftar</a>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link @yield('beranda-active')" href="{{ route('home') }}">Beranda</a>
          </li>
          @if(Auth::user()->vendor == '1')
            <li class="nav-item">
              <a class="nav-link @yield('pesanan-active')" href="{{ route('order.index') }}">Buat pesanan</a>
            </li>
          @elseif(Auth::user()->vendor == '2')
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Lihat tawaran</a>
            </li>
          @endif
            <li class="nav-item">
              <a class="nav-link @yield('stok-active')" href="{{ route('stock.index') }}">Persediaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
        @endguest
      </ul>
      @auth
      <div class="navbar-nav">
          <a class="nav-link active" id="welcome" href="">Selamat datang, {{ Auth::user()->name }}</a>
      </div>
      @endauth
    </div>
  </div>
</nav>