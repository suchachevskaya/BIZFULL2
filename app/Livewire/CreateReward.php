<?php

namespace App\Livewire;

use Livewire\Component;

class CreateReward extends Component
{
    public $rewards=[];
    public function addReward()
    {

        $this->rewards[] = ['description' => '', 'amount' => ''];
    }

    public function render()
    {
        return view('livewire.create-reward');
    }
}
