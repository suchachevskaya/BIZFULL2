<?php

namespace App\Livewire;

use Livewire\Component;

class MultiStepForm extends Component
{
    public $currentStep=1;
    public function render()
    {
        return view('livewire.multi-step-form');
    }
    public function increaseStep(){
        $this->currentStep++;
    }
    public function decreaseStep()
    {
        $this->currentStep--;
    }
}
