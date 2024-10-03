<?php

namespace App\Http\Livewire;

use App\Models\Services;
use Livewire\Component;

class ServicesAdmin extends Component
{
    public function render()
    {
        $data = Services::all();
        return view('livewire.services-admin', ['data' => $data]);
    }
}
