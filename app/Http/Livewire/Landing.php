<?php

namespace App\Http\Livewire;

use App\Models\Landing as ModelsLanding;
use App\Models\News;
use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        $home = ModelsLanding::where('type', 'home')->first();
        $about = ModelsLanding::where('type', 'about')->first();
        $maps = ModelsLanding::where('type', 'maps')->first();
        $news = News::where('is_active', 1)
            ->orderBy('created_at', 'desc')
        ->paginate(5);

        return view('livewire.landing', compact('home', 'about', 'maps', 'news'));
    }
}
