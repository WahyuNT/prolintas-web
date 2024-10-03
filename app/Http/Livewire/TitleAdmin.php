<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Livewire\Component;

class TitleAdmin extends Component
{
    public $title;
    public $subtitle;

    public function render()
    {
        $title = Landing::where('type', 'home')->first();
        $this->title = $title->title;
        $this->subtitle = $title->subtitle;
        $image = $title->image;



        return view('livewire.title-admin', compact('title','image'));
    }
}
