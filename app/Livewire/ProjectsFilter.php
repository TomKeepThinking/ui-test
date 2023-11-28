<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsFilter extends Component
{
    public $filters;
    public $activeFilter;
    public $filteredItems = [];
    public $list;

    public function mount($items)
    {
        $this->filters = ['featured', 'software', 'website', 'brand', 'archived'];
        $this->activeFilter = $this->filters[0];

        $this->list = $items;
        $this->setFilteredItems();
    }

    public function setFilteredItems()
    {
        $newArray = array_filter($this->list, function($item) {
            return in_array($this->activeFilter, $item['tags']);
        });

        $this->filteredItems = $newArray;
    }


    public function setActiveItem($filter){
        $this->activeFilter = $filter;
        $this->setFilteredItems();
    }

    public function render()
    {
        return view('livewire.projects-filter');
    }
}
