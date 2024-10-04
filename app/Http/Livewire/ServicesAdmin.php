<?php

namespace App\Http\Livewire;

use App\Models\Services;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicesAdmin extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    public $title;
    public $desc;
    public $icon;
    public $edit = '';
    public $add = null;
    public $confirmDelete = null;
    public $nama_gambar;
    public $icon_baru;


    public function render()
    {
        $data = Services::all();
        $edit = $this->edit;
        $add = $this->add;
        $confirmDelete = $this->confirmDelete;
        $icon = $this->icon;
        $title = $this->title;



        return view('livewire.services-admin', [
            'data' => $data,
            'edit' => $edit,
            'confirmDelete' => $confirmDelete,
            'icon' => $icon,
            'add' => $add,
            'title' => $title
        ]);
    }

    public function add()
    {

        $this->add = 'add';
        $this->title = '';
        $this->desc = '';
    }
    public function submitAdd()
    {

        $post = new Services([
            'title' => $this->title,
            'desc' => $this->desc,
            'is_active' => '1',

        ]);



        $this->validate([
            'nama_gambar' => 'mimes:png,jpg,pdf|max:4096', // 4MB Max
            'title' => 'required',
            'desc' => 'required',
        ]);

        $currentTimestamp = time();
        if ($this->nama_gambar != null) {
            $fileNamIconi = 'services' . '_' . $currentTimestamp . '.' . $this->nama_gambar->getClientOriginalExtension();
            $filePath = $this->nama_gambar->storeAs(('image/services'), $fileNamIconi, 'real_public');
            $post->icon = $fileNamIconi;
        }

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
        $data = Services::where('id', $id)->first();

        $this->title = $data->title;
        $this->desc = $data->desc;
        $this->icon = $data->icon;
        $this->edit = $id;
    }


    public function back()
    {
        $this->title = '';
        $this->desc = '';
        $this->icon = '';
        $this->edit = '';
        $this->add = '';
        $this->nama_gambar = '';
        $this->icon_baru = '';
    }
    public function simpan()
    {
        $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $data = Services::where('id', $this->edit)->first();
        $data->title = $this->title;
        $data->desc = $this->desc;


        $currentTimestamp = time();
        if ($this->icon_baru != null) {
            $this->validate([
                'icon_baru' => 'image|max:4096', // 4MB Max
            ]);

            $gambarLama = $data->icon;
            if ($gambarLama && Storage::disk('real_public')->exists('image/services/' . $gambarLama)) {
                Storage::disk('real_public')->delete('image/services/' . $gambarLama);
            }


            $fileNameIcon = 'services' . '_' . $currentTimestamp . '.' . $this->icon_baru->getClientOriginalExtension();
            $filePath = $this->icon_baru->storeAs(('image/services'), $fileNameIcon, 'real_public');
            $data->icon = $fileNameIcon;
        }

        if ($data->save()) {
            $this->alert('success', 'Data has been successfully updated.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
    public function delete($id)
    {
        $data = Services::where('id', $id)->first();
        if ($data->icon && Storage::disk('real_public')->exists('image/services/' . $data->icon)) {
            Storage::disk('real_public')->delete('image/services/' . $data->icon);
        }

        if ($data->delete()) {
            $this->alert('success', 'Data has been successfully deleted.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to delete.');
        }
    }
    public function active($id)
    {
        $data = Services::where('id', $id)->first();
        $data->is_active = 1;
        if ($data->save()) {
            $this->alert('success', 'Data has been successfully activated.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to be activated.');
        }
    }
    public function inactive($id)
    {
        $data = Services::where('id', $id)->first();
        $data->is_active = 0;



        if ($data->save()) {
            $this->alert('success', 'Data has been successfully deactivated.');
            $this->back();
        } else {
            $this->alert('error', 'Data failed to be deactivated.');
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
