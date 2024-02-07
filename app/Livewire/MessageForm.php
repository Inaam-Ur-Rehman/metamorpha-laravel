<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MessageForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $company;
    public $title;
    public $newsletter;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => '',
        'message' => 'required|min:10',
        'company' => 'required|min:3',
        'title' => 'required|min:3',
    ];

    protected $messages = [
        "*.required" => "Vul dit verplichte veld in.",
    ];

    public function save()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        if ($this->newsletter) {
            // Subscribe to newsletter.
            if (!Newsletter::where('email', $this->email)->exists()) {
                Newsletter::create([
                    'email' => $this->email
                ]);
            }
        }

        $res = Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'company' => $this->company,
            'title' => $this->title
        ]);
        // Clear input fields.

        Mail::to('bart@metamorpha.be')->send(new \App\Mail\Message($res));

        $this->reset();


        return session()->flash('message', 'Uw bericht is succesvol opgeslagen.');
    }


    public function render()
    {
        return view('livewire.message-form');
    }
}
