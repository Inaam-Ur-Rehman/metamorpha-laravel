<?php

namespace App\Livewire;

use App\Models\Newsletter;
use App\Models\Question;
use Livewire\Component;

class InspiratiekaartenForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $title;
    public $message;
    public $newsletter = false;

    public function save()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'message' => 'required',
        ]);

        Question::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'title' => $this->title,
            'message' => $this->message,
        ]);

        if ($this->newsletter) {
            if(!Newsletter::where('email', $this->email)->exists()) {
                Newsletter::create([
                    'email' => $this->email,
                ]);
            }
        }

        $this->reset();

        session()->flash('success', 'Uw vraag is succesvol verzonden.');
    }
    public function render()
    {

        return view('livewire.inspiratiekaarten-form');
    }
}
