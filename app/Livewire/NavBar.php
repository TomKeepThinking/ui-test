<?php

namespace App\Livewire;

use RalphJSmit\Livewire\Urls\Facades\Url;

use Livewire\Component;

class NavBar extends Component
{
    public $navItems = [];

    public $open = false;

    public $activeNavItem;

    public $light = false;

    public function mount($routes, $light = false){

        if($light){
            $this->light = true;
        }
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
        if($this->light){
            return view('livewire.nav-bar-light');
        }
        return view('livewire.nav-bar');
    }
}
