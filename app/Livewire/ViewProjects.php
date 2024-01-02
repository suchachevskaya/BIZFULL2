<?php

namespace App\Livewire;

use Livewire\Component;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
//псевдоним
use App\Models\project as ProjectModel;

class ViewProjects extends Component

{
    public function render()
    {
        $projects =ProjectModel::all();
        return view('livewire.view-projects',[
            'projects'=>$projects,
    ]);
    }
}
