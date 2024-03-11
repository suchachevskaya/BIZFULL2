<?php

namespace App\Livewire;

use Livewire\Component;

class ProgressBar extends Component
{
    public $total_donations;
    public $funding;

    public function mount($total_donations, $funding)
    {
        $this->total_donations = $total_donations;
        $this->funding = $funding;
    }

    public function render()
    {
        return view('livewire.progress-bar', [
            'percentage' => ($this->total_donations / $this->funding) * 100,
        ]);
    }
}
