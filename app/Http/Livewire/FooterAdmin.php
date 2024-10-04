<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class FooterAdmin extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $subtitle;
    public $edit = 'disabled';
    public $disabled = 'disabled';
    public $image_baru;
    public $subjudul;


    public function render()
    {
        $data = Landing::where('type', 'footer')->first();
        $this->subtitle = $data->subtitle;
        $image = $data->image;
        $edit =  $this->edit;
        $this->subjudul = $data->subjudul;


        return view('livewire.footer-admin', compact('data', 'image', 'edit'));
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
        $data = Landing::where('type', 'footer')->first();
        $data->subtitle = $this->subtitle;
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
