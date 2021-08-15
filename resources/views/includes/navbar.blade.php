<!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="/">
          <img style="width: 50%" src="/images/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home </a>
              
            </li>
            <li class="nav-item {{ (request()->is('/request*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('request') }}">Booking</a>
            </li>

            {{-- <li class="nav-item {{ (request()->is('/troubleshoot*')) ? 'active' : '' }}">
              <a class="nav-link" href="">About Us</a>
            </li> --}}

            @guest
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
              </li> --}}
              <li class="nav-item">
                <a
                  class="btn btn-primary nav-link px-4 text-white"
                  href="{{ route('login') }}"
                  >Sign In</a
                >
              </li>
            @endguest
          </ul>

          @auth
              <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="/images/user-icon.png"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    @php 
                      $roles = Auth::user()->roles;
                      // dd($roles);
                    @endphp 

                    @if ($roles == 'ADMIN')
                      <a class="dropdown-item" href="/admin"
                        >Dashboard</a
                      >
                    <div class="dropdown-divider"></div>
                    @elseif ($roles == 'VP')
                    <a class="dropdown-item" href="/vp"
                      >Dashboard</a
                    > 
                    <div class="dropdown-divider"></div>
                    @endif

                    
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="dropdown-item">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
                </li>

                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, {{ Auth::user()->name }}
                  </a>
                </li>
             
                <li class="nav-item">
                      <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="dropdown-item">Logout</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              </ul>
          @endauth
        </div>
      </div>
    </nav>