<?php

namespace App\Livewire;

use Livewire\Component;

class HotSpots extends Component
{
    public $hotSpots;
    #[Reactive]
    public $activeSpot;


    public function mount()
    {
        $this->activeSpot = $this->hotSpots[0];
    }

    public function render()
    {
        return view('livewire.hot-spots',[
            'hotSpots' => $this->hotSpots,
            'activeSpot' => $this->activeSpot
        ]);
    }

    public function setActiveSpot($index)
    {
        $this->activeSpot = $this->hotSpots[$index];
        $this->test = true;
    }

    #[Computed]
    public function openSubMenu($name)
    {
        $this->test = true;

        if($this->activeSpot['name'] === $name){
            return true;
        } else {
            return false;
        }
    }

}
