<div class="header-container">
    <a class="logoContainer" href="{{ url('/welcome') }}">
        <div>
            <img class="image" src="{{ asset('img/image-lg.png') }}"/>
        </div>
        <h1>
            BIZFULL
        </h1>
    </a>

    <div class="header">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/user/profile') }}" class="profile-button">Profile</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>
