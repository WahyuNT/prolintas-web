<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        $contact = Contact::where('is_active', 1)->get();
        return view('livewire.contact-us', compact('contact'));
    }
}
