<div>
    @livewire('header')

    <div class="project-container">
        <div>
            <div class="project-container-inf">
                <div class="project-section-img">
                    <div class="project-img owl-carousel">
                        @foreach($project->galleries as $image)
                            <div class="item">
                                <img class="slide" src="{{ Storage::url('images/' . $image->image) }}" alt="Gallery Image">
                            </div>
                        @endforeach
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
                    <div class="title"> {{ $project->title }}</div>
                    <hr>
                    <div class="project-link project-inf">
                        @if(count($project->socials) > 0)
                            <b>View profile:</b>
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
        </div>

        <div class="selection-faq-comment">
            <div class="faq-section-title title">Frequently asked questions:</div>
            <div class="faq-container">

                <h2 class="faq-title">What is this project about?</h2>
                <p class="faq-description"> {{ $project->description }}</p>
                @foreach($project->faqs as $_f_a_g)
                    <h2 class="faq-question">{{ $_f_a_g->question }}</h2>
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

            <div class="project-comment">
                <div class="title">Your feedback on the {{$project->title}}</div>

                @livewire('comment', ['project' => $project])
            </div>

        </div>

    </div>
    @livewire('footer')
</div>
