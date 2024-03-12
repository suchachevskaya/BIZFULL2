<div class="all-project-container">
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
{{--    <div class="heading">--}}
{{--        <h1 class="text-wrapper">Meet our projects</h1>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        @livewire('filter-projects')--}}
{{--    </div>--}}
    <div class="projectCardContainer" >
        @foreach ($projects as $project)
            @if($project->status=='resolved' || auth()->user()->hasRole('admin'))
                <div class="show-best rounded">
                    <img class="image" src="{{ asset('storage/images/' . $project->attachment) }}"/>    <div class="">{{$project->title }}</div>
                    <div class="">{{$project->contact}}</div>

                        <a href="{{ route('project-page', ['id' => $project->id]) }}">
                            <button>
                                more
                            </button>
                        </a>

                    @if(auth()->user()->hasRole('admin'))
                        <div >
                            @livewire('update-status', ['project' => $project])
                        </div>
                        <div >
                            @livewire('delete-project', ['project' => $project])
                        </div>
                    @endif
                </div>
            @endif
        @endforeach
    </div>
    @livewire('footer');
</div>
