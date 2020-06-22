<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fishery;
use Livewire\WithPagination;

class FisheriesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $species = [];
    public $perPage = 10;

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
        if (!$this->search && $this->species) { 
            $fisheries = []; 
        } 
        if ($this->search) {
            $fisheries = \App\Fishery::with(['address', 'waters'])
            ->whereLike([
                'name', 'address.town', 'address.county', 'address.post_code'
            ], $this->search)
            ->orderBy('name')
            ->paginate($this->perPage);
            // dd($fisheries);

            if ($this->species) {
                $fisheries = $fisheries
                ->filter(function($fishery) {
                    return ! array_diff($this->species, $fishery->fishTypes());
                });
            }
        }
        
        
        return view('livewire.fisheries-table', compact('fisheries'));
    }
}
