<?php

namespace App\Livewire;

use App\Models\BookedEvents;
use Livewire\Component;

class EventForm extends Component
{
    public $event;

    public $title;
    public $date;
    public $firstName;
    public $lastName;
    public $email;
    public $street;
    public $postalCode;
    public $country;
    public $phone;
    public $job;
    public $company;
    public $billingAddress;
    public $vatNumber;
    public $kmo;
    public $terms;
    public $privacy;


    public function mount($event)
    {
        $dateRules = 'required|date|after_or_equal:' . $event->startDate . '|before_or_equal:' . $event->end_date;

        $this->event = $event;
        $this->title = $event->title;
    }

    protected $rules = [
        'title' => 'required|min:3',
        'date' => 'required|date',
        'firstName' => 'required|min:3',
        'lastName' => 'required|min:3',
        'email' => 'required|email',
        'street' => 'required|min:3',
        'postalCode' => 'required|min:3',
        'country' => 'required|min:3',
        'phone' => 'required|min:3',
        'terms' => 'required',
        'privacy' => 'required',
    ];

    protected $messages = [
        'terms.required' => 'Je moet akkoord gaan met de algemene voorwaarden.',
        'privacy.required' => 'Je moet akkoord gaan met het privacybeleid.',
        "*.required" => "Vul dit verplichte veld in.",
    ];

    public function save()
    {
        $this->validate();
        $this->validate([
            'date' => 'required|date|after_or_equal:' . $this->event->startDate . '|before_or_equal:' . $this->event->endDate,
        ]);
        BookedEvents::create([
            'event_id' => $this->event->id,
            'title' => $this->title,
            'date' => $this->date,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'street' => $this->street,
            'postal_code' => $this->postalCode,
            'country' => $this->country,
            'phone' => $this->phone,
            'job' => $this->job,
            'company' => $this->company,
            'billing_address' => $this->billingAddress,
            'vat_number' => $this->vatNumber,
            'kmo' => $this->kmo,
        ]);

        session()->flash('success', 'Bedankt voor je inschrijving!');
        $this->reset();

        // navigate to the homepage
        return redirect()->to('/');


    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
