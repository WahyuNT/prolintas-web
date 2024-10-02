<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class HelpCenter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $faq = Faq::where('is_active', 1)->paginate(5);

        return view('livewire.help-center', compact('faq'));
    }
}
