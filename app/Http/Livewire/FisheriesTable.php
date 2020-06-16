<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fishery;

class FisheriesTable extends Component
{

    public $search = '';
    public $species = ['er'];

    public function render()
    {
        return view('livewire.fisheries-table', [
            'fisheries' => $this->search ? \App\Fishery::whereLike([
                'name', 'address.line_one', 'address.line_two','address.town', 'address.county', 'address.post_code'
            ], $this->search)
            ->get()
            : []
        ]);
    }
}
