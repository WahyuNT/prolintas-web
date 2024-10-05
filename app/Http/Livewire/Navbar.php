<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Http\Request;

class Navbar extends Component
{


    public function render(Request $request)
    {
      

        $data = Landing::where('type', 'header')->first();

        return view('livewire.navbar', [
            'data' => $data
        ]);
    }
    public function toEn()
    {
        Session::put('lang', 'en');
        return redirect()->route('index');
    }
    public function toId()
    {
        Session::put('lang', 'id');
        return redirect()->route('index');

    }
}
