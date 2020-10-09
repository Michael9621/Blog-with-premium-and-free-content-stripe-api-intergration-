<div class="navbar navbar-inverse bg-dark">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">Animalgram</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            @if(Auth::user())
                <span><a href="/subscribe">Subscribe</a></span>
            
                <span> 
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </span>
            <li>
            @else
                <span><a href="{{route('login')}}">login</a>  
                <a href="{{route('register')}}">register</a></span>
            @endif

        </ul>
    </div>
</div>