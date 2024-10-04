<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class TitleAdmin extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $title;
    public $subtitle;
    public $judul;
    public $subjudul;
    public $edit = 'disabled';
    public $disabled = 'disabled';
    public $image_baru;

    public function render()
    {
        $title = Landing::where('type', 'home')->first();
        $this->title = $title->title;
        $this->subtitle = $title->subtitle;
        $this->judul = $title->judul;
        $this->subjudul = $title->subjudul;
        $image = $title->image;
        $edit =  $this->edit;

        return view('livewire.title-admin', compact('title', 'image', 'edit'));
    }


    public function edit()
    {

        $this->edit = '';
    }
    public function stopEdit()
    {
        $this->edit = 'disabled';
    }
    public function simpan()
    {

        $this->validate([
            'title' => 'required',
            'subtitle' => 'required',
       
        ]);
        $data = Landing::where('type', 'home')->first();
        $data->title = $this->title;
        $data->subtitle = $this->subtitle;
        $data->judul = $this->judul;
        $data->subjudul = $this->subjudul;

        $currentTimestamp = time();
        if ($this->image_baru != null) {
            $this->validate([
                'image_baru' => 'mimes:png,jpg|max:4096', // 4MB Max
            ]);

            $gambarLama = $data->image;
            if ($gambarLama && Storage::disk('real_public')->exists('image/' . $gambarLama)) {
                Storage::disk('real_public')->delete('image/' . $gambarLama);
            }


            $fileNameimage = 'About' . '_' . $currentTimestamp . '.' . $this->image_baru->getClientOriginalExtension();
            $filePath = $this->image_baru->storeAs(('image/'), $fileNameimage, 'real_public');
            $data->image = $fileNameimage;
        }


        if ($data->save()) {
            $this->alert('success', 'Data has been successfully updated.');
            $this->edit = 'disabled';
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
