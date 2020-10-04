<div class="navbar navbar-inverse bg-dark">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">Animalgram</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            @if(Auth::user())
                <span> <li><a href="/subscribe">Subscribe</a></li> </span>
            
                <span> <li> <a href="/logout">logout</a></li>  </span>
            <li>
            @else
                <span> <li><a href="{{route('login')}}">login</a></li>  
                <li><a href="{{route('register')}}">register</a></li>  </span>
            @endif

        </ul>
    </div>
</div>