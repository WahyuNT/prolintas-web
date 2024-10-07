<?php

namespace App\Http\Livewire;

use App\Models\Landing as ModelsLanding;
use App\Models\News;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Livewire\Component;

class Landing extends Component
{
    public function render(Request $request)
    {
        if (!$request->session()->exists('lang')) {
            Session::put('lang', 'en');
        }

      

        $home = ModelsLanding::where('type', 'home')->first();
        $about = ModelsLanding::where('type', 'about')->first();
        $maps = ModelsLanding::where('type', 'maps')->first();
        $maps2 = ModelsLanding::where('type', 'maps2')->first();
        $news = News::all();



        return view('livewire.landing', compact('home', 'about', 'maps', 'news', 'maps2'));
    }
}
