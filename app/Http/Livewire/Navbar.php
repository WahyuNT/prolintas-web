<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $data = Landing::where('type', 'header')->first();

        return view('livewire.navbar', [
            'data' => $data
        ]);
    }
}
