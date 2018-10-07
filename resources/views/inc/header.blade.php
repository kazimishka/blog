      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="/basic">Dashboard</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
           @guest
           <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Sign up</a>   
           @if(Route::has('register'))
           <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
           @else
           <span class="text-muted">{{ Auth::user()->name }}</span>
           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            @endif    
            @endguest
          </div>
        </div>
      </header>