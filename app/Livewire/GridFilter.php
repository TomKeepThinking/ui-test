<?php

namespace App\Livewire;

use Livewire\Component;

class GridFilter extends Component
{
    public $filters;
    public $activeFilter;
    public $filteredItems = [];
    public $list;

    public $clients;
    public $showClients = false;

    public function mount($items, $clients)
    {
        $this->filters = ['featured', 'software', 'website', 'brand', 'archived'];
        $this->activeFilter = $this->filters[1];
        $this->list = $items;
        $this->clients = $clients;


        $this->setFilteredItems();
    }

    public function setActiveItem($filter){
        $this->activeFilter = $filter;
        $this->setFilteredItems();
    }

    public function setFilteredItems()
    {
        $newArray = array_filter($this->list, function($item) {
            return in_array($this->activeFilter, $item['tags']);
        });

        $this->filteredItems = $newArray;
    }

    public function render()
    {
        return view('livewire.grid-filter');
    }
}
