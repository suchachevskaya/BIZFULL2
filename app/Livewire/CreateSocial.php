<?php

namespace App\Livewire;

use Livewire\Component;

class CreateSocial extends Component
{
    public $socials=[];
    public function addSocial()
    {
        $this->socials[] = ['network' => '', 'link' => ''];
    }
    public function render()
    {
        return view('livewire.create-social');
    }
}
