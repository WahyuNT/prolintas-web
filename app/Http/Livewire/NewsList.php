<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsList extends Component
{
    public function render()
    {
        $news = News::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.news-list', compact('news'));
    }
}
