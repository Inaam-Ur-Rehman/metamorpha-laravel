<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Mollie\Laravel\Facades\Mollie;
use Z3d0X\FilamentFabricator\Models\Page;

class CheckoutForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $country;
    public $city;
    public $street;
    public $house_number;
    public $postal_code;
    public $company;
    public $terms;
    public $quantity = 1;
    public $company_number;

    public $total_cost;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'country' => 'required|min:3',
        'city' => 'required|min:3',
        'street' => 'required|min:3',
        'house_number' => 'required|min:1',
        'postal_code' => 'required|min:3',
        'terms' => 'required',
        'quantity' => 'required|numeric|min:1|max:10',
    ];

    public $messages = [
        "*.required" => "Vul dit verplichte veld in.",
    ];

    protected function getData()
    {
        $inspiratie = Page::where('slug', 'aanbod/inspiratiekaarten')->firstOrFail();
        $arrayofblocks = $inspiratie->blocks;
        $blocks = [];
        foreach ($arrayofblocks as $block) {
            $blocks[] = $block['data'];
        }
        $block = $blocks[0];

        $this->total_cost = $block['price'];
    }

    public function update()
    {
        if ($this->country == 'Belgium') {
            $this->total_cost = intval($this->total_cost);
        } else {
            $this->total_cost = intval($this->total_cost) + 4;
        }
    }

    public function quantityUpdate(){
        if ($this->country == 'Belgium') {
            $this->quantity = $this->quantity;
            $this->total_cost = intval($this->total_cost) * intval($this->quantity);
        } else {
            $this->quantity = $this->quantity;
            $this->total_cost = (intval($this->total_cost) + 4) * intval($this->quantity);
        }
    }

    public function submit()
    {
        $this->validate();
        // Order::create([
        //     'first_name' => $this->first_name,
        //     'last_name' => $this->last_name,
        //     'email' => $this->email,
        //     'country' => $this->country,
        //     'city' => $this->city,
        //     'street' => $this->street,
        //     'house_number' => $this->house_number,
        //     'postal_code' => $this->postal_code,
        //     'company' => $this->company,
        // ]);

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                // convert cost to string
                "value" => $this->country == 'Belgium' ? number_format(intval($this->total_cost), 2, '.', '') : number_format(intval($this->total_cost) + 4, 2, '.', ''),
                // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Inspiratiekaarten voor werkende mensen",
            "redirectUrl" => route('success'),
            "metadata" => [
                //generating random order id
                "order_id" => uniqid(),
                "email" => $this->email,
                "first_name" => $this->first_name,
                "last_name" => $this->last_name,
                "country" => $this->country,
                "city" => $this->city,
                "street" => $this->street,
                "house_number" => $this->house_number,
                "postal_code" => $this->postal_code,
                "company" => $this->company,
                "quantity" => $this->quantity,
                "company_number" => $this->company_number
            ],
        ]);
        // session put with also the payment id and set expiration time for this paymentid
        Session::put('paymentId', $payment->id);
        Session::put('expirationTime', time() + 3600);
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function render()
    {
        $inspiratie = Page::where('slug', 'aanbod/inspiratiekaarten')->firstOrFail();
        $arrayofblocks = $inspiratie->blocks;
        $blocks = [];
        foreach ($arrayofblocks as $block) {
            $blocks[] = $block['data'];
        }
        $block = $blocks[0];
        if($this->country == 'Belgium'){
            $this->total_cost = intval($block['price'])*intval($this->quantity);
        } else if ($this->country == 'Netherland') {
            $this->total_cost = (intval($block['price']) + 4)*intval($this->quantity);
        }
        else{
            $this->total_cost = intval($block['price'])*intval($this->quantity);
        }
        return view('livewire.checkout-form', [
            'block' => $block,
        ]);
    }
}
