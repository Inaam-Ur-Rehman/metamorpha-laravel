<?php

namespace App\Livewire;

use Livewire\Component;

class EventForm extends Component
{
    public $event;

    public function render()
    {
        return view('livewire.event-form');
    }
}
