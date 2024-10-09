<?php

namespace App\Http\Livewire;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Tymon\JWTAuth\Facades\JWTAuth;

class AccountAdmin extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $username;
    public $email;
    public $role;
    public $password;

    public $edit = '';
    public $add = null;
    public $confirmDelete = null;
    public $myrole;
    public $myId;


    public function mount()
    {
        $userid = JWTAuth::toUser(JWTAuth::getToken());
        $this->myrole = $userid->role;
        $this->myId = $userid->id;

        if ($this->myrole != 'super_admin') {
            return redirect()->route('admin.dashboard');
        }
    }

    public function render()
    {


        $data = User::all();
        $edit = $this->edit;
        $add = $this->add;
        $confirmDelete = $this->confirmDelete;
        $myId = $this->myId;
        $username = $this->username;




        return view('livewire.account-admin', [
            'data' => $data,
            'edit' => $edit,
            'confirmDelete' => $confirmDelete,
            'add' => $add,
            'username' => $username,
            'myId' => $myId
        ]);
    }

    public function add()
    {

        $this->add = 'add';
        $this->username = '';
        $this->email = '';
        $this->role = '';
        $this->password = '';
    }
    public function submitAdd()
    {

        $post = new User([
            'username' => $this->username,
            'email' => $this->email,
            'role' => $this->role,
            'password' => bcrypt($this->password),

        ]);



        $this->validate([

            'username' => 'required',
            'role' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if ($post->save()) {
            $this->alert('success', 'Data has been successfully added.', [
                'position' => 'center'
            ]);
            $this->back();
        } else {
            $this->alert('error', 'Data failed to be added.', [
                'position' => 'center'
            ]);
        }
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();

        $this->username = $data->username;
        $this->role = $data->role;
        $this->email = $data->email;
        $this->edit = $id;
    }


    public function back()
    {
        $this->username = '';
        $this->email = '';

        $this->edit = '';
        $this->add = '';
    }
    public function simpan()
    {
        $this->validate([
            'username' => 'required',
            'role' => 'required',
            'email' => 'required|email',
        ]);

        $data = User::where('id', $this->edit)->first();
        $data->username = $this->username;
        $data->role = $this->role;
        $data->email = $this->email;

        if ($data->save()) {
            $this->alert('success', 'Data has been successfully updated.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
    public function delete($id)
    {
        $data = User::where('id', $id)->first();


        if ($data->delete()) {
            $this->alert('success', 'Data has been successfully deleted.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to delete.');
        }
    }

    public function deleteConfirm($id)
    {
        $this->confirmDelete = $id;
    }
    public function cancelDelete()
    {
        $this->confirmDelete = null;
    }
}
