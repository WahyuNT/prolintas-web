<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class HeaderAdmin extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $subtitle;
    public $edit = 'disabled';
    public $disabled = 'disabled';
    public $image_baru;

    public function render()
    {

        $data = Landing::where('type', 'header')->first();
        $this->subtitle = $data->subtitle;
        $image = $data->image;
        $edit =  $this->edit;



        return view('livewire.header-admin', compact('data', 'image', 'edit'));
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
        $data = Landing::where('type', 'header')->first();
        $data->subtitle = $this->subtitle;

        $currentTimestamp = time();
        if ($this->image_baru != null) {
            $this->validate([
                'image_baru' => 'mimes:png,jpg|max:4096', // 4MB Max
            ]);

            $gambarLama = $data->image;
            if ($gambarLama && Storage::disk('real_public')->exists('image/' . $gambarLama)) {
                Storage::disk('real_public')->delete('image/' . $gambarLama);
            }


            $fileNameimage = 'header' . '_' . $currentTimestamp . '.' . $this->image_baru->getClientOriginalExtension();
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
