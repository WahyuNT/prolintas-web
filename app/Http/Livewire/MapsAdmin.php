<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MapsAdmin extends Component
{

    use LivewireAlert;
    public $maps;
    public $edit = 'disabled';
    public $disabled = 'disabled';


    public function render()
    {
        $data = Landing::where('type', 'maps')->first();
        $maps = $data->maps_link;
        $this->maps = $maps;


        return view('livewire.maps-admin', compact('data', 'maps'));
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
        $data = Landing::where('type', 'maps')->first();
     

        $iframeTag = $this->maps;

      
        preg_match('/https[^"]*/', $iframeTag, $matches);

        // Cek apakah match ditemukan
        if (isset($matches[0])) {
            $data->maps_link = $matches[0]; 
        } else {
            $data->maps_link = null;
        }

     

        if ($data->save()) {
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
}
