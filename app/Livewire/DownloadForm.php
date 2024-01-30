<?php

namespace App\Livewire;

use App\Models\Download;
use App\Models\Newsletter;
use App\Models\Paper;
use Livewire\Component;

class DownloadForm extends Component
{
    public $slug;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $company;
    public $persona;
    public $subscribed;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'company' => 'required|min:3',
        'persona' => 'required|min:3',
    ];

    public $messages = [
        "*.required" => "Vul dit verplichte veld in.",
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Download::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'persona' => $this->persona,
        ]);
        if ($this->subscribed) {
            if (!Newsletter::where('email', $this->email)->exists()) {
                Newsletter::create([
                    'email' => $this->email,
                ]);
            }
        }
        session()->flash('message', 'Bedankt voor het downloaden!');

        $file = Paper::where('slug', $this->slug)->firstOrFail();


        $this->reset();
        return response()->download(storage_path("app/public/{$file->file}"));
    }

    public function render()
    {
        return view('livewire.download-form');
    }
}
