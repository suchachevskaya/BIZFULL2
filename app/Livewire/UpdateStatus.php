<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\project;
use App\Enums\ProjectStatus;

class UpdateStatus extends Component
{
    public $project;
    public function mount(project $project){
        $this->project=$project;
    }
    public function render()
    {
        return view('livewire.update-status');
    }
    public function changeStatus ($newStatus){
        $status = ProjectStatus::tryFrom($newStatus);
        if ($status === null) {
            session()->flash('error', 'Invalid status');
            return;
        }
        $this->project->changeStatus($status);
        $this->project->save();
        session()->flash('message','Project status updated successfully');
    }

}
