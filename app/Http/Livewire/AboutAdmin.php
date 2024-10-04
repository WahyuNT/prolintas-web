<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutAdmin extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $title;
    public $subtitle;
    public $edit = 'disabled';
    public $disabled = 'disabled';
    public $image_baru;
    public $judul;
    public $subjudul;

    public function render()
    {
        $title = Landing::where('type', 'about')->first();
        $this->title = $title->title;
        $this->subtitle = $title->subtitle;
        $image = $title->image;
        $edit =  $this->edit;
        


        return view('livewire.about-admin', compact('title', 'image', 'edit'));
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
     
        $data = Landing::where('type', 'about')->first();
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
            $this->edit = 'disabled';
            $this->alert('success', 'Data has been successfully updated.');
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
