<?php

namespace App\Http\Livewire;

use App\Models\Services;
use Livewire\Component;

class OurServices extends Component
{
    public function render()
    {

        $services = Services::where('is_active', 1)->get();

        return view('livewire.our-services', compact('services'));
    }
}
