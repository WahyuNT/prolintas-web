<?php

namespace App\Http\Livewire;

use App\Models\Messages;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Message extends Component
{
    use LivewireAlert;
    public $name;
    public $email;
    public $message;


    public function render()
    {
        return view('livewire.message');
    }

    public function submit()
    {
     
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = new Messages();
        $data->name = $this->name;
        $data->email = $this->email;
        $data->message = $this->message;

        if ($data->save()) {
            $this->alert('success', 'The message has been successfully sent.', [
                'position' => 'center'
            ]);
            $this->name = '';
            $this->email = '';
            $this->message = '';
        } else {
            $this->alert('error', 'The message failed to send.', [
                'position' => 'center'
            ]);
        }
    }
    public function test(){
        dd('tes');
    }
}
