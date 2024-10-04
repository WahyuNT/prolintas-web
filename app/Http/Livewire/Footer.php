<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Landing;
use App\Models\Services;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $data = Landing::where('type', 'footer')->first();
        $service = Services::where('is_active', 1)->get();
        $contact = Contact::where('is_active', 1)->get();


        return view('livewire.footer', [
            'data' => $data,
            'service' => $service,
            'contact' => $contact
            
        ]);
    }
}
