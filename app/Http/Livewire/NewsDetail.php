<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsDetail extends Component
{
    public $newsID;
    public function mount($newsId)
    {
        $this->newsID = $newsId;
    }
    public function render()
    {
        $news = News::where('id', $this->newsID)->first();
        return view('livewire.news-detail', [
            'news' => $news
        ]);
    }
}
