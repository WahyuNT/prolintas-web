<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class HelpCenter extends Component
{
    public function render()
    {
        $faq = Faq::where('is_active', 1)->paginate(5);

        return view('livewire.help-center', compact('faq'));
    }
}
