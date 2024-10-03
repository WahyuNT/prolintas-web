<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsAdmin extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title;
    public $desc;
    public $image;
    public $edit = '';
    public $add = null;
    public $confirmDelete = null;
    public $nama_gambar;
    public $image_baru;


    public function render()
    {
        $data = News::all();
        $edit = $this->edit;
        $add = $this->add;
        $confirmDelete = $this->confirmDelete;
        $image = $this->image;
        $title = $this->title;



        return view('livewire.news-admin', [
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
        $this->desc = '';
    }
    public function submitAdd()
    {

        $post = new News([
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
            $fileNamimagei = 'News' . '_' . $currentTimestamp . '.' . $this->nama_gambar->getClientOriginalExtension();
            $filePath = $this->nama_gambar->storeAs(('image/news'), $fileNamimagei, 'real_public');
            $post->image = $fileNamimagei;
        }

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
        $data = News::where('id', $id)->first();

        $this->title = $data->title;
        $this->desc = $data->desc;
        $this->image = $data->image;
        $this->edit = $id;
    }


    public function back()
    {
        $this->title = '';
        $this->desc = '';
        $this->image = '';
        $this->edit = '';
        $this->add = '';
        $this->nama_gambar = '';
        $this->image_baru = '';
    }
    public function simpan()
    {
        $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $data = News::where('id', $this->edit)->first();
        $data->title = $this->title;
        $data->desc = $this->desc;


        $currentTimestamp = time();
        if ($this->image_baru != null) {
            $this->validate([
                'image_baru' => 'image|max:4096', // 4MB Max
            ]);

            $gambarLama = $data->image;
            if ($gambarLama && Storage::disk('real_public')->exists('image/news/' . $gambarLama)) {
                Storage::disk('real_public')->delete('image/news/' . $gambarLama);
            }


            $fileNameimage = 'News' . '_' . $currentTimestamp . '.' . $this->image_baru->getClientOriginalExtension();
            $filePath = $this->image_baru->storeAs(('image/news'), $fileNameimage, 'real_public');
            $data->image = $fileNameimage;
        }

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diperbarui');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal diperbarui');
        }
    }
    public function delete($id)
    {
        $data = News::where('id', $id)->first();
        if ($data->image && Storage::disk('real_public')->exists('image/news/' . $data->image)) {
            Storage::disk('real_public')->delete('image/news/' . $data->image);
        }

        if ($data->delete()) {
            $this->alert('success', 'Data berhasil dihapus');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
    public function active($id)
    {
        $data = News::where('id', $id)->first();
        $data->is_active = 1;
        if ($data->save()) {
            $this->alert('success', 'Data berhasil diaktifkan');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal diaktifkan');
        }
    }
    public function inactive($id)
    {
        $data = News::where('id', $id)->first();
        $data->is_active = 0;



        if ($data->save()) {
            $this->alert('success', 'Data berhasil dinonaktifkan');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal dinonaktifkan');
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
