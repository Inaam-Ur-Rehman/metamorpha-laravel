<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Menu\Link;
use Spatie\Menu\Menu;



class Navbar extends Component
{
    // menu as item.name, item.url


    public function render()
    {
        // return as array
        $menu = [
            ['name' => 'Home', 'url' => '/'],
            [
                'name' => 'Aanbod', 'url' => '/aanbod',
                'submenu' => [
                    ['name' => 'Organisaties in verandering', 'url' => '/aanbod/verandering'],
                    ['name' => 'Levens in transitie', 'url' => '/aanbod/levens'],
                    ['name' => 'Inspiratiekaarten', 'url' => '/aanbod/inspiratiekaarten'],
                    ['name' => 'Boek', 'url' => '/aanbod/boek'],
                    ['name' => 'Verdieping', 'url' => '/aanbod/verdieping'],
                ]
            ],
            ['name' => 'Agenda', 'url' => 'https://calendly.com/bart-vanderherten'],
            ['name' => 'Getuigenissen', 'url' => '/getuigenissen'],
            ['name' => 'Inspiratie', 'url' => '/inspiratie'],
            ['name' => 'Team', 'url' => '/team'],
        ];

        return view(
            'livewire.navbar',
            [
                'menu' => $menu
            ]
        );
    }
}
