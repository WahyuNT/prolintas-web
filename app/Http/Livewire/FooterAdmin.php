<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FooterAdmin extends Component
{
    use LivewireAlert;
    public $subtitle;
    public $edit = 'disabled';
    public $disabled = 'disabled';


    public function render()
    {
        $data = Landing::where('type', 'footer')->first();
        $this->subtitle = $data->subtitle;
        $image = $data->image;
        $edit =  $this->edit;


        return view('livewire.footer-admin', compact('data', 'image', 'edit'));
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
        $title = Landing::where('type', 'footer')->first();
        $title->subtitle = $this->subtitle;

        if ($title->save()) {
            $this->alert('success', 'Data has been successfully updated.');
            $this->edit = 'disabled';
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
