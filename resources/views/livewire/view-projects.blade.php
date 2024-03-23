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

    <div>
        <form wire:submit.prevent="applyFilter">
            <input type="range" min="0" max="100000" class="slider" id="funding" wire:model.defer="fundingFilter">
            <input wire:model.defer="deadline" type="range" min="2024" max="2030"
                   class="slider" id="deadline">

            <select wire:model.defer="projectStatus" class="projectStatus"
                    id="projectStatus">
                <option value="" disabled selected>Select status</option>
                <option value="open">open</option>
                <option value="resolved">resolved</option>
                <option value="rejected">rejected</option>
            </select>

            <select wire:model.defer="category" id="category" name="category">
                <option value="" disabled selected>Select a category</option>
                <option value="technology">Technologies</option>
                <option value="art">Art and Culture</option>
                <option value="health">Health and Well-being</option>
                <option value="education">Education</option>
                <option value="ecology">Ecology and sustainability</option>
                <option value="social">Social initiatives</option>
                <option value="science and research">Science and research</option>
            </select>
            <select wire:model.defer="order" class="order" id="order">
                <option value="" disabled selected>Select order</option>
                <option value="newToOld">from new to old</option>
                <option value="oldToNew">from old to new</option>
            </select>
            <button type="button" class="buttonFilter" id="resetFilters" wire:click="resetFilters" onclick="Livewire.emit('refreshComponent')">Сбросить</button>
            <button type="submit">Find</button>
        </form>
    </div>


    <div class="projectCardContainer">
        @foreach ($projects as $project)
            @if($project->status=='resolved' || auth()->user()->hasRole('admin'))
                <div class="show-best rounded slider" wire:key="{{ $project->id }}">
                    <img class="image" src="{{ asset('storage/images/' . $project->attachment) }}" alt="Attachment Image">
                    <div class="">{{$project->title }}</div>
                    <div class="">{{$project->contact}}</div>

                    <a href="{{ route('project-page', ['id' => $project->id]) }}">
                        <button>
                            more
                        </button>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
    <div>{{$projects->links('pagination::default')}}</div>

    @livewire('footer');
</div>
