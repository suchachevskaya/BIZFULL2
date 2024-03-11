<?php

namespace App\Livewire;


use Livewire\Component;

use App\Models\Project;
class ViewProjects extends Component

{

    protected $listeners = ['projectDeleted' => 'render'];

    public function render()
    {
        $projects = Project::all(); // Получите все проекты

        return view('livewire.view-projects', [
            'projects' => $projects, // Передайте проекты в представление
        ]);
    }
}
