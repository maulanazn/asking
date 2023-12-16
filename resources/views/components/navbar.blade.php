<link href="{{asset('css/navbar.css')}}" rel="stylesheet" />

<div>
    <nav class="nav-center">
        @if (request()->is("login") || request()->is("register"))
            <a href="{{url('/')}}">Back</a>
        @else
            @auth
                <a href="{{url('/logout')}}">Logout</a>
            @endauth
            @guest    
                <a href="{{url('/login')}}">Login</a>
                <a href="{{url('/register')}}">Register</a>
            @endguest
        @endif
    </nav>
</div>