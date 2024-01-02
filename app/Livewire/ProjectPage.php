<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectPage extends Component
{
    public $project;

    public function mount($id)
    {
        $this->project = Project::find($id);
    }

    public function render()
    {
        return view('livewire.project-page', [
            'project' => $this->project,
        ]);
    }
}
