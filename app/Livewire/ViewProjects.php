<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\Pagination;
use Livewire\WithPagination;
use App\Models\Project;
class ViewProjects extends Component

{

    protected $listeners = ['projectDeleted' => 'render'];

    public function render()
    {
        $projects = Project::all(); // Получите все проекты

        return view('livewire.view-projects', [
            'projects' => Project::paginate(15), // Передайте проекты в представление
        ]);
    }
}
