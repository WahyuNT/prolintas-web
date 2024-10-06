<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FloatingAdmin extends Component
{


    use LivewireAlert;
    public $description;
    public $edit = 'disabled';
    public $disabled = 'disabled';
    public $icon;


    public function render()
    {
        $data = Landing::where('type', 'floating-contact')->first();
        $description = $data->description;
        $icon = $data->icon;
        $this->description = $description;
        $this->icon = $icon;


        return view('livewire.floating-admin', compact('data', 'icon', 'description'));
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
        $data = Landing::where('type', 'floating-contact')->first();
        $data->description = $this->description;
        $data->icon = $this->icon;



        if ($data->save()) {
            $this->alert('success', 'Data has been successfully updated.');
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
