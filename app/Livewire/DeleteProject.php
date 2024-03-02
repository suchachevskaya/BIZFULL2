<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;


class DeleteProject extends Component
{

    public function deleteProject($id)
    {
        $project = Project::find($id);

        if ($project) {
            $project->delete();
            return "Проект успешно удален.";
        } else {
            return "Проект не найден.";
        }
    }
    public function render()
    {
        $projects = Project::all(); // Получите все проекты

        return view('livewire.delete-project', [
            'projects' => $projects, // Передайте проекты в представление
        ]);
    }
}
