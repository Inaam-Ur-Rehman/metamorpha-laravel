<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Header;

class Footer extends Component
{
    public function render()
    {
        $menuItems = Header::all()->where('disabled', false);
        // get all menu items that has no child 
        $menu = $menuItems->filter(function($item) {
            return $item->has_child == false;
        })->toArray();

        // get all menu items that has child
        $menuHasChild = $menuItems->filter(function($item) {
            return $item->has_child == true;
        })->toArray();

      $subMenu = $menuHasChild[1]['children'][0]['child'];

    // filter out submenu that is disabled
    $subMenu = array_filter($subMenu, function($item) {
        return $item['disabled'] == false;
    }); 
        return view('livewire.footer', [
            'menu' => $menu,
            'subMenu' => $subMenu
        ]);
    }
}
