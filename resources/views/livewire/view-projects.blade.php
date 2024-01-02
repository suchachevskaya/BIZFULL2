<div class="projectCardContainer">
 @foreach ($projects as $project)
        <div class="projectCard">
            <div>{{$project->title }}</div>
            <div>{{$project->description}}</div>
            <div>{{$project->category}}</div>
            <div>{{$project->status}}</div>
            <div>{{$project->attachment}}</div>
            <div>{{$project->deadline}}</div>
            <div>{{$project->contact}}</div>
            <div>{{$project->status_change_by_id}}</div>
            <button>
                <a href="{{ route('project-page', ['id' => $project->id]) }}">More</a>
            </button>
        </div>
        @endforeach
</div>
