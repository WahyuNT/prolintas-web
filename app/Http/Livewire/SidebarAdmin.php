<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;

class SidebarAdmin extends Component
{
    public $role;
    public function mount()
    {
        $userid = JWTAuth::toUser(JWTAuth::getToken());
        $this->role = $userid->role;
    }


    public function render()
    {
        $role = $this->role;
        return view('livewire.sidebar-admin', compact('role'));
    }
}
