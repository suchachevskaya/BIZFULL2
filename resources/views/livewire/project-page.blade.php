<div>
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

    <div class="project-container">
        <div class="project-container-inf">
            <div class="project-section-img">
                <div class="project-img">
                    @foreach($project->galleries as $image)
                        <img class="slide" src="{{ Storage::url('images/' . $image->image) }}" alt="Gallery Image">
                    @endforeach
                </div>
                <div class="project-link">
                    @if(count($project->socials) > 0)
                        <p>View profile:</p>
                        @foreach ($project->socials as $social)
                            @if($social->link && in_array($social->network, ['facebook', 'twitter', 'instagram']))
                                <a href="{{ $social->link }}">
                                    <img src="/img/icon/{{ $social->network }}.png" alt="{{ $social->network }}">
                                </a>

                            @endif

                        @endforeach
                    @else
                        <p>No social networks.</p>
                    @endif
                </div>
                <div class="project-button">
                    @if(auth()->user()->hasRole('admin'))
                        @livewire('update-status', ['project' => $project])
                        @livewire('delete-project', ['project' => $project])

                    @endif
                </div>
                <div class="project-summ-container">
                    @livewire('progress-bar', ['total_donations' => $project->total_donations, 'funding' =>
                    $project->funding])
                    @livewire('payment-process', ['project' => $project])
                </div>

            </div>
            <div class="project-section-content">
                <h1> {{ $project->title }}</h1>
                <hr>
                <div class="project-inf"><b>Category:</b>
                    <p>{{ $project->category }}</p></div>
                <hr>
                <div class="project-inf"><b>Deadline:</b>
                    <p>{{ $project->deadline }}</p></div>
                <hr>
                <div class="project-inf"><b>Contact:</b>
                    <p>{{ $project->contact }}</p></div>
                <hr>
                <div class="project-inf"><b>Funding:</b>
                    <p>{{ $project->funding }}</p></div>
                <hr>
                <div class="project-inf"><b>Email:</b>
                    <p>{{ $project->email }}</p></div>
                <hr>
                <div class="project-inf"><b>Phone:</b>
                    <p>{{ $project->phone }}</p></div>
                <hr>
                <div class="project-inf"><b>Total donations:</b>
                    <p>{{ $project->total_donations }}</p></div>
                <hr>
                @if(auth()->user()->hasRole('admin'))
                    <div class="project-inf"><b>Статус:</b>
                        <p>{{ $project->status }}</p></div>
                    <hr>
                    <div class="project-inf"><b>User id:</b>
                        <p>{{$project->user_id}}</p></div>
                    <hr>
                @endif
            </div>
        </div>
        <div class="faq-container">
            <p class="faq-section-title">Frequently asked questions:</p>
            <p class="faq-title">What is this project about?</p>
            <p class="faq-description"> {{ $project->description }}</p>
            @foreach($project->faqs as $_f_a_g)
                <p class="faq-question">{{ $_f_a_g->question }}</p>
                <p class="faq-answer">{{ $_f_a_g->answer }}</p>
            @endforeach
        </div>
        <div>
            @if(!empty($project->video))
                <p>View profile:</p>
                <video width="320" height="240" controls>
                    <source src="{{ $project->video }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @else
                @if(auth()->user()->hasRole('admin'))
                    <p>There is no video.</p>
                @endif
            @endif
        </div>
    </div>
    <h2>Your feedback on the {{$project->title}}</h2>
    @livewire('comment');
    @livewire('footer');
</div>
