<?php

namespace App\Http\Livewire;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AccountAdmin extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $username;
    public $email;
    public $password;

    public $edit = '';
    public $add = null;
    public $confirmDelete = null;



    public function render()
    {
        $data = User::all();
        $edit = $this->edit;
        $add = $this->add;
        $confirmDelete = $this->confirmDelete;

        $username = $this->username;



        return view('livewire.account-admin', [
            'data' => $data,
            'edit' => $edit,
            'confirmDelete' => $confirmDelete,
            'add' => $add,
            'username' => $username
        ]);
    }

    public function add()
    {

        $this->add = 'add';
        $this->username = '';
        $this->email = '';
        $this->password = '';
    }
    public function submitAdd()
    {

        $post = new User([
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),

        ]);



        $this->validate([

            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if ($post->save()) {
            $this->alert('success', 'Data Berhasil Ditambahkan', [
                'position' => 'center'
            ]);
            $this->back();
        } else {
            $this->alert('error', 'Data Gagal Ditambahkan', [
                'position' => 'center'
            ]);
        }
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();

        $this->username = $data->username;
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
            'email' => 'required|email',
        ]);

        $data = User::where('id', $this->edit)->first();
        $data->username = $this->username;
        $data->email = $this->email;

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diperbarui');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal diperbarui');
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
