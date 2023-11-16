<?php

namespace App\Livewire;

use Livewire\Component;

class HotSpots extends Component
{
    public $hotSpots;
    #[Reactive]
    public $activeSpot;

    public $show = false;


    public function mount()
    {
        $this->activeSpot = $this->hotSpots[0];
    }

    public function render()
    {
        return view('livewire.hot-spots');
    }

    public function setActiveSpot($index)
    {
        $this->activeSpot = $this->hotSpots[$index];
    }


    public function openSubMenu($name)
    {
        if($this->activeSpot['name'] === $name){
            return true;
        } else {
            return false;
        }
    }

}
