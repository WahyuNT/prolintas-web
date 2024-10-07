<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class GalleryAdmin extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title;
    public $image;
    public $image_baru;
    public $edit = '';
    public $add = null;
    public $confirmDelete = null;



    public function render()
    {
        $data = Gallery::all();
        $edit = $this->edit;
        $add = $this->add;
        $confirmDelete = $this->confirmDelete;
        $image = $this->image;
        $title = $this->title;



        return view('livewire.gallery-admin', [
            'data' => $data,
            'edit' => $edit,
            'confirmDelete' => $confirmDelete,
            'image' => $image,
            'add' => $add,
            'title' => $title
        ]);
    }

    public function add()
    {


        $this->add = 'add';
        $this->title = '';
    }
    public function submitAdd()
    {

        $post = new Gallery([
            'title' => $this->title,
            'is_active' => '1',

        ]);




        $this->validate([

            'title' => 'required',
        ]);

        $currentTimestamp = time();
        if ($this->image != null) {
            $fileNamimagei = 'gallery' . '_' . $currentTimestamp . '.' . $this->image->getClientOriginalExtension();
            $filePath = $this->image->storeAs(('image/gallery'), $fileNamimagei, 'real_public');
            $post->image = $fileNamimagei;
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
        $data = Gallery::where('id', $id)->first();

        $this->title = $data->title;
        $this->image = $data->image;
        $this->edit = $id;
    }


    public function back()
    {
        $this->title = '';
        $this->image = '';
        $this->edit = '';
        $this->add = '';
        $this->image_baru = '';
    }
    public function simpan()
    {
        $this->validate([
            'title' => 'required',
        ]);



        $data = Gallery::where('id', $this->edit)->first();
        $data->title = $this->title;


        $currentTimestamp = time();
        if ($this->image_baru != null) {
            $this->validate([
                'image_baru' => 'image|max:4096', // 4MB Max
            ]);

            $gambarLama = $data->image;
            if ($gambarLama && Storage::disk('real_public')->exists('image/gallery/' . $gambarLama)) {
                Storage::disk('real_public')->delete('image/gallery/' . $gambarLama);
            }


            $fileNameimage = 'gallery' . '_' . $currentTimestamp . '.' . $this->image_baru->getClientOriginalExtension();
            $filePath = $this->image_baru->storeAs(('image/gallery'), $fileNameimage, 'real_public');
            $data->image = $fileNameimage;
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

        $data = Gallery::where('id', $id)->first();
        if ($data->image && Storage::disk('real_public')->exists('image/gallery/' . $data->image)) {
            Storage::disk('real_public')->delete('image/gallery/' . $data->image);
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
        $data = Gallery::where('id', $id)->first();
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
        $data = Gallery::where('id', $id)->first();
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
