<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsAdminEdit extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title;
    public $desc;
    public $descNew;
    public $titleNew;
    public $image;
    public $edit = '';
    public $add = null;
    public $confirmDelete = null;
    public $nama_gambar;
    public $image_baru;
    public $newsID;


    public function mount($newsId)
    {
        $this->newsID = $newsId;
        $data = News::where('id', $this->newsID)->first();
        $this->image = $data->image;
        $this->title = $data->title;
        $this->desc = $data->desc;
    }

    public function setDesc($value)
    {
        $this->descNew = $value;
    }
    public function setTitle($value)
    {
        $this->titleNew = $value;
    }

    protected $listeners = ['setDesc', 'setTitle'];

    public function render()
    {
        $data = News::where('id', $this->newsID)->first();

        $image = $this->image;



        return view('livewire.news-admin-edit', [
            'data' => $data,
            'image' => $image,

        ]);
    }


    public function edit()
    {
        $data = News::where('id', $this->newsID)->first();

        $this->title = $data->title;
        $this->desc = $data->desc;
        $this->image = $data->image;
    }


    public function simpan()
    {
        $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);



        $data = News::where('id', $this->newsID)->first();
        $data->title = $this->title;

        if ($this->descNew != null) {
            $data->desc = $this->descNew;
        } else {
            $data->desc = $this->desc;
        }




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
            return redirect()->route('admin.news');
        } else {
            $this->alert('error', 'Data gagal diperbarui');
        }
    }
}
