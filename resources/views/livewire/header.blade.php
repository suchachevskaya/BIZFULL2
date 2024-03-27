<div class="header-container">
    <a class="logoContainer" href="{{ url('/welcome') }}">
        <div>
            <img class="image" src="{{ asset('img/image-lg.png') }}"/>
        </div>
        <h1>
            BIZFULL
        </h1>
    </a>
    <div class="header-Wrapper">

        <div class="header">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/create-project') }}" class="profile-button">New project</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="header">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/view-projects') }}" class="profile-button">All projects</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

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
</div>
