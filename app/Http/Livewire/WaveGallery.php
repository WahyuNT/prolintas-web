<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class WaveGallery extends Component
{
    public function render()
    {
        $data = Gallery::where('is_active', 1)->get();
        return view('livewire.wave-gallery',    ['data' => $data]);
    }
}
