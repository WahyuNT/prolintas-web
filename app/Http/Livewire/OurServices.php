<?php

namespace App\Http\Livewire;

use App\Models\Services;
use Livewire\Component;

class OurServices extends Component
{
    public $servicesId;
    public function render()
    {

        $services = Services::where('is_active', 1)->get();
        $data = Services::where('id', $this->servicesId)->first();

        return view('livewire.our-services', compact('services', 'data'));
    }
    public function showService($id)
    {
    
        $this->servicesId = $id;
      
    }
}
