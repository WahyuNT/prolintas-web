<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AboutAdmin extends Component
{
    use LivewireAlert;
    public $title;
    public $subtitle;
    public $edit = 'disabled';
    public $disabled = 'disabled';


    public function render()
    {
        $title = Landing::where('type', 'about')->first();
        $this->title = $title->title;
        $this->subtitle = $title->subtitle;
        $image = $title->image;
        $edit =  $this->edit;


        return view('livewire.about-admin', compact('title', 'image', 'edit'));
    }

    public function edit()
    {

        $this->edit = '';
    }
    public function stopEdit()
    {
        $this->edit = 'disabled';
    }
    public function simpan()
    {
        $this->edit = 'disabled';
        $title = Landing::where('type', 'about')->first();
        $title->title = $this->title;
        $title->subtitle = $this->subtitle;

        if ($title->save()) {
            $this->alert('success', 'Data has been successfully updated.');
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
