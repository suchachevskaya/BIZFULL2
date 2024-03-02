<?php

namespace App\Livewire;

use Livewire\Component;

class CreateSocial extends Component
{
    public $socials=[];
    public function addSocial()
    {
        $this->socials[] = ['description' => '', 'amount' => ''];
    }
    public function render()
    {
        return view('livewire.create-social');
    }
}
