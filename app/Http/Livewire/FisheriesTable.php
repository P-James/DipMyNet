<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fishery;

class FisheriesTable extends Component
{

    public $search = '';

    public function render()
    {
        return view('livewire.fisheries-table', [
            'fisheries' => \App\Fishery::with('address')
            ->whereHas('address', function ($address) {
                $address->where('town', $this->search);
            })
            // ->search($this->search)
                ->get()
        ]);
    }
}
