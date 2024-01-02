<?php

namespace App\Livewire;

use RalphJSmit\Livewire\Urls\Facades\Url;

use Livewire\Component;

class NavBar extends Component
{
    public $navItems = [];

    public $open = false;

    public $activeNavItem;

    public function mount($routes){
        $this->navItems = $routes;
        $currentRouteName = Url::currentRoute();

        $key = array_search($currentRouteName, array_column($this->navItems, 'route'));

        if($key){
            $this->activeNavItem = $this->navItems[$key];
        } else {
            $this->clearActiveNavItem();
        }
    }

    public function setActiveNavItem($item){
        $this->activeNavItem = $item;
    }

    public function toggleMobile(){
        $this->open = !$this->open;
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
