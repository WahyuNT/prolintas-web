<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;


class UserAdmin extends Component
{
    use LivewireAlert;
    public $user;
    public $username;
    public $email;
    public $password;

    public function mount()
    {
        $userid = JWTAuth::toUser(JWTAuth::getToken());
        $this->user = $userid->id;
        $this->username = $userid->username;
        $this->email = $userid->email;
    }


    public function render()
    {
        $data = User::where('id', $this->user)->first();


        return view('livewire.user-admin', [
            'data' => $data,
        ]);
    }
    public function back()
    {
        $userid = JWTAuth::toUser(JWTAuth::getToken());
        $this->user = $userid->id;
        $this->username = $userid->username;
        $this->email = $userid->email;
        $this->password = '';
    }

    public function submit()
    {
        $data = User::where('id', $this->user)->first();
        $data->username = $this->username;
        $data->email = $this->email;
        if ($this->password != null) {
            $data->password = bcrypt($this->password);
        }
        if ($data->save()) {
            $this->alert('success', 'Data has been successfully updated.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
