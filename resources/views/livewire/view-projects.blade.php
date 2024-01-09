<div>
    <div class="heading">
        <div class="text-wrapper">Meet our projects</div>
    </div>
    <div class="projectCardContainer">

        @foreach ($projects as $project)
            <div class="iframe-body-section">
                <div class="div">
                    <div class="div-teamstyled">
                        <img class="img" src="img/OIG.sFh3EEgSM0QySj.jpg"/>
                        <div class="div-wrapper">
                            <div class="text-wrapper-2">{{$project->title }}</div>
                        </div>
                        <div class="heading-2">
                            <div class="text-wrapper-3">{{$project->contact}}</div>
                        </div>
                        <button>
                            <a href="{{ route('project-page', ['id' => $project->id]) }}">More</a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
