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
        if (!$this->search ) { 
            $fisheries = []; 
        } 
        if ($this->search && !$this->species) {
            $fisheries = \App\Fishery::whereLike([
                'name', 'address.line_one', 'address.line_two', 'address.town', 'address.county', 'address.post_code'
            ], $this->search)->get();
        }
        if ($this->search && $this->species) {
            $fisheries = \App\Fishery::whereLike([
                'name', 'address.line_one', 'address.line_two', 'address.town', 'address.county', 'address.post_code'
            ], $this->search)
            ->get()
            ->filter(function($fishery) {
                return ! array_diff($this->species, $fishery->waters->pluck('fish')->toArray());
            });
        }
        
        // foreach ($fisheries as $fishery) {
        //     $ac = array_count_values($fishery->waters->pluck('type')->toArray());
        // }

        return view('livewire.fisheries-table', compact('fisheries'));
    }
}
