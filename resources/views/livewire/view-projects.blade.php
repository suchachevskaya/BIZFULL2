<div class="all-project-container">
    @livewire('header')

    <div>
        <form class="filterProjects" wire:submit.prevent="applyFilter">
            <div>
                <p>Required amount:</p>
                <div class="input-wrapper">
                    <input type="range" min="0" max="100000" class="slider" id="funding"
                           wire:model.defer="fundingFilter">
                    <input type="number" min="0" max="100000" wire:model.defer="fundingFilter">
                </div>

            </div>
            <div>
                <p> Donation deadline:</p>
                <div class="input-wrapper">
                    <input wire:model.defer="deadline" type="range" min="2024" max="2030" class="slider" id="deadline">
                    <input type="number" min="2024" max="2030" wire:model.defer="deadline">
                </div>

            </div>
            @if(auth()->user()->hasRole('admin'))
            <div>
                <select wire:model.defer="projectStatus" class="projectStatus"
                        id="projectStatus">
                    <option value="" disabled selected>Select status</option>
                    <option value="open">open</option>
                    <option value="resolved">resolved</option>
                    <option value="rejected">rejected</option>
                </select>
            </div>
            @endif
            <div>
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
            </div>
            <div>
                <select wire:model.defer="order" class="order" id="order">
                    <option value="" disabled selected>Select order</option>
                    <option value="newToOld">from new to old</option>
                    <option value="oldToNew">from old to new</option>
                </select>
            </div>


            <button type="submit">Find</button>
        </form>
    </div>


    <div class="projectCardContainer">
        @if($projects->isEmpty())
            <p>There are no suitable projects according to your parameters</p>
        @else
            @foreach ($projects as $project)
                @if($project->status=='resolved' || auth()->user()->hasRole('admin'))
                    <div class="show-best rounded slider" wire:key="{{ $project->id }}">
                        <img class="image" src="{{ asset('storage/images/' . $project->attachment) }}"
                             alt="Attachment Image">
                        <h3 class="">{{$project->title }}</h3>
                        <p class="">{{$project->contact}}</p>
                        <p>{{$project->short_desc}}</p>

                        <div class="button-star-wrapper">
                            <a href="{{ route('project-page', ['id' => $project->id]) }}">
                                <button>
                                    more
                                </button>
                            </a>
                            @livewire('star-counter', ['project' => $project])
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
    <div>{{$projects->links('pagination::default')}}</div>

    @livewire('footer');
</div>
