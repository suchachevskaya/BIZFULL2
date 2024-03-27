<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Star;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class StarCounter extends Component
{
    public $project_id;
    public $rating;
    public $existingStar;

    public function mount(Project $project)
    {
        $this->project_id = $project->id;
        $this->rating = Star::where('project_id', $this->project_id)->sum('number');
        $this->existingStar = Star::where('user_id', Auth::id())
            ->where('project_id', $this->project_id)
            ->exists();
    }

    public function rate($number)
    {
        if (!Auth::check() || !$this->project_id) {
            return;
        }

        $existingStar = Star::where('user_id', Auth::id())
            ->where('project_id', $this->project_id)
            ->first();

        if ($existingStar) {
            $existingStar->delete();
        } else {

            Star::create([
                'user_id' => Auth::id(),
                'project_id' => $this->project_id,
                'number' => $number
            ]);
        }

        $this->rating = Star::where('project_id', $this->project_id)->sum('number');
        $this->existingStar = Star::where('user_id', Auth::id())
            ->where('project_id', $this->project_id)
            ->exists();
    }

    public function render()
    {
        return view('livewire.star-counter');
    }
}
