<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $index = 0;
    public $items = [
        ['image' => 'img/image-5.png',
            'title' => 'Robot assistant for children with special needs',
            'description' => 'The robot will have artificial intelligence that will adapt to the individual
                        characteristics and interests of the child. The robot will communicate with the child, play with
                        him,                       teach him new skills and keep him motivated. The robot will also be connected with parents and
                        specialists who will be able to monitor and correct the child’s learning and development
                        process. ',
            'price' => '$55 000',
            'duration' => '3 months',
            'instructor' => 'Peter Beckett'],
        ['image' => 'img/image-6.png',
            'title' => 'Smart Urban Backpack ',
            'description' => 'A backpack with a solar panel for charging devices, built-in GPS, and an anti-theft system.',
            'price' => '$500',
            'duration' => '60 days',
            'instructor' => 'Alexey Ivanov'],
        ['image' => 'img/image-7.png',
            'title' => 'Miniature Water Purification System',
            'description' => ' A portable water purification device using ultraviolet light, suitable for travelers and tourists',
            'price' => '$500',
            'duration' => '45 days',
            'instructor' => 'Maria Petrova'],

        ['image' => 'img/image-8.png',
            'title' => 'Eco-Friendly Packaging Materials ',
            'description' => ' Biodegradable packaging materials made from recycled plant fibers.',
            'price' => '$200',
            'duration' => '50 days',
            'instructor' => ' Elena Kuznetsova'],
        ['image' => 'img/image-9.png',
            'title' => 'Compact Portable Solar Generator ',
            'description' => 'A small and lightweight solar generator for emergency electronics power supply during hikes.',
            'price' => '$800',
            'duration' => '70 days',
            'instructor' => ' Igor Nikolaev'],
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
