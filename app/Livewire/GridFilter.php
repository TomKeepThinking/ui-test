<?php

namespace App\Livewire;

use Livewire\Component;

class GridFilter extends Component
{

    public $filters;
    public $activeFilter;

    public $filteredItems = [];
    public $list;
    public $loading = false;


    public function mount($items)
    {
        $this->filters = ['featured', 'software', 'website', 'brand', 'archived'];
        $this->activeFilter = $this->filters[0];

        $this->list = $items;


        $this->setFilteredItems();
    }

    public function render()
    {
        return view('livewire.grid-filter');
    }

    public function setActiveItem($filter){
        $this->activeFilter = $filter;
        $this->setFilteredItems();
    }

    public function isActive($item){
        return $item === $this->activeFilter;
    }

    public function setFilteredItems()
    {
        $newArray = array_filter($this->list, function($item) {
            return in_array($this->activeFilter, $item['tags']);
        });


        $this->filteredItems = $newArray;
    }
}
