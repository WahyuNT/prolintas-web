<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Maps2Admin extends Component
{
    use LivewireAlert;
    public $maps;
    public $title;
    public $edit = 'disabled';
    public $disabled = 'disabled';


    public function render()
    {
        $data = Landing::where('type', 'maps2')->first();
        $maps = $data->maps_link;
        $title = $data->title;
        $this->maps = $maps;
        $this->title = $title;


        return view('livewire.maps2-admin', compact('data', 'maps', 'title'));
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
        $data = Landing::where('type', 'maps2')->first();
        $data->title = $this->title;

        $iframeTag = $this->maps;


        preg_match('/https[^"]*/', $iframeTag, $matches);

        // Cek apakah match ditemukan
        if (isset($matches[0])) {
            $data->maps_link = $matches[0];
        } else {
            $data->maps_link = null;
        }



        if ($data->save()) {
            $this->alert('success', 'Data has been successfully updated.');
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
