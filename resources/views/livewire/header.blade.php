<div class="header-container-wrapper">
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
            @if (Route::has('login'))
                @auth
                    <div class="header">
                        <a href="{{ url('/create-project') }}" class="profile-button">New project</a>
                    </div>
                    <div class="header">
                        <a href="{{ url('/view-projects') }}" class="profile-button">All projects</a>
                    </div>
                    <div class="header">
                        <a href="{{ url('/user/profile') }}" class="profile-button">Profile</a>
                    </div>
                @else
                    <div class="header">
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                @endauth
            @endif
        </div>
    </div>
</div>

