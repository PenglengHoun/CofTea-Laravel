<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">CofTea</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="/">Home</a>
            @guest
                <a class="nav-item nav-link" href="#promotion">Promotion</a>
            @else
                <a class="nav-item nav-link" href="promotion">Promotion</a>
            @endif
                <a class="nav-item nav-link" href="#">About Us</a>
            </div>
            <div class="navbar-nav">
                @guest
                    <a class="nav-item nav-link" href="{{ route('register') }}">Sign Up</a> 
                    <a class="nav-item nav-link"  href="{{ route('login') }}">Sign In</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a id="navbarDropdown" class="navbar-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="navbar-dropdown">
                                <a class="navbar-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Log Out
                                </a>
                        </div>                                   
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </nav>