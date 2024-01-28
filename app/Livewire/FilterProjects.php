<?php

namespace App\Livewire;

use App\Models\project;
use Livewire\Component;

class FilterProjects extends Component
{
    public $status = 'all';

    public function render()
    {
        return view('livewire.filter-projects', [
            'projects' => $this->status == 'all'
                ? Project::all()
                : Project::where('status', $this->status)->get(),
        ]);
    }
}
