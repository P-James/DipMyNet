<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fishery;

class FisheriesTable extends Component
{

    public $search = '';
    public $species = [];

    public function selectSpecies($species)
    {
        in_array($species, $this->species) ?
            array_splice($this->species, array_search($species, $this->species), 1)
            : $this->species[] = $species;
    }

    public function render()
    {
        return view('livewire.fisheries-table', [
            'fisheries' => $this->search ? \App\Fishery::whereLike([
                'name', 'address.line_one', 'address.line_two', 'address.town', 'address.county', 'address.post_code'
            ], $this->search)
                ->get()
                : []
        ]);
    }
}
