<?php

namespace App\Livewire;

use Livewire\Component;

class CreateFAQ extends Component

{
    public $faqs=[];
    public function addFaq()
    {
        $this->faqs[] = ['question' => '', 'answer' => ''];
    }
    public function render()
    {
        return view('livewire.create-f-a-q');
    }
}
