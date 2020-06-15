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
            'fisheries' => \App\Fishery::search($this->search)
                ->get()
        ]);
    }
}
