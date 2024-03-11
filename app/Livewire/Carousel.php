<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $index = 0;
    public $items = [
        ['image' => 'img/image-5.png',
            'title' => 'Robot assistant for children with special needs',
            'description' => ' We want to create a robot that will help children with special needs in learning, development
                        and
                        socialization. The robot will have artificial intelligence that will adapt to the individual
                        characteristics and interests of the child. The robot will communicate with the child, play with
                        him,
                        teach him new skills and keep him motivated. The robot will also be connected with parents and
                        specialists who will be able to monitor and correct the child’s learning and development
                        process. We
                        believe that our project can improve the quality of life for children with special needs and
                        their
                        families.',
            'price' => '$55 000',
            'duration' => '3 months',
            'instructor' => 'Peter Beckett'],
        ['image' => 'img/image-2.png',
            'title' => 'Robot assistant ',
            'description' => 'We want to obot..',
            'price' => '$55 000',
            'duration' => '3 months',
            'instructor' => 'Peter Beckett'],
    ];

    public function render()
    {

        return view('livewire.carousel', ['item' => $this->items[$this->index]]);
    }

    public function next()
    {
        $this->index = ($this->index + 1) % count($this->items);
    }

    public function prev()
    {
        if ($this->index === 0) {
            $this->index = count($this->items) - 1;
        } else {
            $this->index -= 1;
        }
    }
}
