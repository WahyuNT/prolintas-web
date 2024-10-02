<?php

namespace App\Http\Livewire;

use App\Models\Landing as ModelsLanding;
use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        $home = ModelsLanding::where('type', 'home')->first();
        $about = ModelsLanding::where('type', 'about')->first();
        $maps = ModelsLanding::where('type', 'maps')->first();

        return view('livewire.landing', compact('home', 'about', 'maps'));
    }
}
