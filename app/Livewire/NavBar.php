<?php

namespace App\Livewire;

use RalphJSmit\Livewire\Urls\Facades\Url;

use Livewire\Component;

class NavBar extends Component
{
    public $navItems = [
        [
            'name' => 'Qi',
            'route' => 'pages.qi'
        ],
        [
            'name' => 'Work',
            'route' => 'pages.work'
        ],
        [
            'name' => 'Ideas',
            'route' => 'pages.ideas'
        ],
        [
            'name' => 'About',
            'route' => 'pages.about'
        ],
        [
            'name' => 'Contact',
            'route' => 'pages.contact'
        ],
    ];

    public $activeNavItem;

    public function mount(){
        $currentRouteName = Url::currentRoute();

        $key = array_search($currentRouteName, array_column($this->navItems, 'route'));

        $this->activeNavItem = $this->navItems[$key];
    }

    public function setActiveNavItem($item){
        $this->activeNavItem = $item;
    }

    public function clearActiveNavItem(){
        $this->activeNavItem = [
            'name' => 'Home',
            'route' => 'pages.home'
        ];
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
