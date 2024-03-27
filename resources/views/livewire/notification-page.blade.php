<div class="notification-container">
    @livewire('header')
    <div class="notification">
    @if (session('message'))
        <h1 class="alert alert-success">
            {{ session('message') }}
        </h1>
    @else
        <h2> Try again</h2>
    @endif
    <div class="button-container">
        <div>
            @auth
                <a href="{{ url('/create-project') }}" class="start-button">Start a new project</a>
            @else
                <a href="{{ route('login') }}" class="start-button">Home</a>
            @endauth
        </div>
        <div>
            @auth
                <a href="{{ url('/view-projects') }}" class="create-button">View all projects</a>
            @else
                <a href="{{ route('login') }}" class="create-button">View all projects</a>
            @endauth
        </div>

    </div>
</div>
    @livewire('footer')
</div>
