<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;


class DeleteProject extends Component
{
    public $id;
    public $project;
    public $project_id;


    public function deleteProject($id)
    {
        $project = Project::find($id);
        if ($project) {
            foreach ($project->galleries as $gallery) {
                $gallery->delete();
            }
            foreach ($project->faqs as $faq) {
                $faq->delete();
            }
            foreach ($project->socials as $social) {
                $social->delete();
            }
            foreach ($project->rewards as $reward) {
                $reward->delete();
            }
            $project->delete();
            return redirect()->route('view-projects')->with('success', 'Проект успешно удален.');

        } else {
            return redirect()->route('view-projects')->with('error', 'Проект не найден');
        }
    }

    public function render()
    {
        $project = Project::find($this->project_id);

        return view('livewire.delete-project', [
            'project' => $project,
        ]);
    }
}
