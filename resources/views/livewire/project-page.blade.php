<div class="project-container">
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
    <div class="title-project">
        <h1>{{ $project->title }}</h1>
    </div>

    <div class="page-project-container">
        <div>

            <p>{{ $project->description }}</p>
            <p>Категория: {{ $project->category }}</p>
            <p>Статус: {{ $project->status }}</p>
            <p>Срок выполнения: {{ $project->deadline }}</p>
            <p>Описание:{{$project->description}}</p>
        </div>
        <div class="page-project-img">
            <img class="image" src="{{ asset('storage/images/' . $project->attachment) }}"/>
        </div>
        <div class="page-project-comment">
            <p>Question/answer</p>
            <input/>
            <button>Send</button>
            <div>
                <div>
                    <img class="image" src="{{ asset('img/face-1.png') }}"/>
                    <p>blablabla</p>
                </div>
            </div>
        </div>
    </div>

    <p>{{ $project->total_donations}}/{{$project->funding}}</p>
    @livewire('progress-bar', ['total_donations' => $project->total_donations, 'funding' => $project->funding])
    @livewire('payment-process', ['project' => $project])
    @livewire('footer');
</div>
