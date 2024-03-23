<div>

    <div class="delete-button">
        <div>Delete a project</div>
        <button wire:click="deleteProject({{$project->id}})">
            Delete
        </button>

        @if(session()->has('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>

