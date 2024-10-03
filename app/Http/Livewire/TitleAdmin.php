<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TitleAdmin extends Component
{
    use LivewireAlert;
    public $title;
    public $subtitle;
    public $edit = 'disabled';
    public $disabled = 'disabled';

    public function render()
    {
        $title = Landing::where('type', 'home')->first();
        $this->title = $title->title;
        $this->subtitle = $title->subtitle;
        $image = $title->image;
        $edit =  $this->edit;

        return view('livewire.title-admin', compact('title', 'image', 'edit'));
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
        $title = Landing::where('type', 'home')->first();
        $title->title = $this->title;
        $title->subtitle = $this->subtitle;

        if ($title->save()) {
            $this->alert('success', 'Data berhasil diperbarui');
        } else {
            $this->alert('error', 'Data gagal diperbarui');
        }
    }
}
