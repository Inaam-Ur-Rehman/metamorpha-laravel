<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Menu\Link;
use Spatie\Menu\Menu;

use App\Models\Header;


class Navbar extends Component
{
    // menu as item.name, item.url


    public function render()
    {

        $menuItems = Header::all()->where('disabled', false);


        // $menu = [
        //     ['name' => 'Home', 'url' => '/'],
        //     [
        //         'name' => 'Aanbod', 'url' => '/aanbod',
        //         'submenu' => [
        //             ['name' => 'Organisaties in verandering', 'url' => '/aanbod/verandering'],
        //             ['name' => 'Levens in transitie', 'url' => '/aanbod/levens'],
        //             ['name' => 'Loopbaancoaching', 'url' => '/loopbaancoaching'],
        //             ['name' => 'Inspiratiekaarten', 'url' => '/aanbod/inspiratiekaarten'],
        //             ['name' => 'Boek', 'url' => '/aanbod/boek'],
        //             // ['name' => 'Verdieping', 'url' => '/aanbod/verdieping'],
        //         ]
        //     ],
        //     ['name' => 'Agenda', 'url' => 'https://calendly.com/bart-vanderherten'],
        //     ['name' => 'Getuigenissen', 'url' => '/getuigenissen'],
        //     ['name' => 'Inspiratie', 'url' => '/inspiratie'],
        //     ['name' => 'Team', 'url' => '/team'],
        //     ['name' => 'Evenementen', 'url' => '/evenementen'],
        // ];

        // convert it into upper format array

        // dd($menuItems[1]->children[0]['child']);

        $menuConverts = [];

        foreach ($menuItems as $menuItem) {
            $menuConverts[] = [
                'name' => $menuItem->name,
                'url' => $menuItem->slug,
                'submenu' => $menuItem->has_child ? array_map(function($child) {
                    if ($child['disabled'] == false) {
                        return [
                            'name' => $child['name'],
                            'url' => $child['slug']
                        ];
                    }
                    else {
                        return [
                            'name' => null,
                            'url' => null
                        ];
                    }
                }, $menuItem->children[0]['child']) : null
            ];
        }





        return view(
            'livewire.navbar',
            [
                'menu' => $menuConverts
            ]
        );
    }
}
