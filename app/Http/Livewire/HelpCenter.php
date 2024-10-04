<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class HelpCenter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $faq = Faq::where('is_active', 1)
            ->where('title', 'like', '%' . $this->search . '%')
            ->orWhere('desc', 'like', '%' . $this->search . '%')
            ->orWhere('judul', 'like', '%' . $this->search . '%')
            ->orWhere('deskripsi', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.help-center', compact('faq'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
