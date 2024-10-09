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
    public $image_baru_faq;

    public function render()
    {

        $data = Landing::where('type', 'header')->first();
        $this->subtitle = $data->subtitle;
        $image = $data->image;
        $edit =  $this->edit;

        $dataFaq = Landing::where('type', 'faq')->first();
        $imageFAQ = $dataFaq->image;


        return view('livewire.header-admin', compact('data', 'image', 'edit', 'dataFaq', 'imageFAQ'));
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

        $dataFaq = Landing::where('type', 'faq')->first();

        $currentTimestamp = time();
        if ($this->image_baru != null) {
            $this->validate([
                'image_baru' => 'mimes:png,jpg,gif|max:4096', // 4MB Max
            ]);

            $gambarLama = $data->image;
            if ($gambarLama && Storage::disk('real_public')->exists('image/' . $gambarLama)) {
                Storage::disk('real_public')->delete('image/' . $gambarLama);
            }


            $fileNameimage = 'header' . '_' . $currentTimestamp . '.' . $this->image_baru->getClientOriginalExtension();
            $filePath = $this->image_baru->storeAs(('image/'), $fileNameimage, 'real_public');
            $data->image = $fileNameimage;
        }
        if ($this->image_baru_faq != null) {
            $this->validate([
                'image_baru_faq' => 'mimes:png,jpg,gif|max:4096', // 4MB Max
            ]);

            $gambarLamaFaq = $dataFaq->image;
            if ($gambarLamaFaq && Storage::disk('real_public')->exists('image/' . $gambarLamaFaq)) {
                Storage::disk('real_public')->delete('image/' . $gambarLamaFaq);
            }


            $fileNameimageFaq = 'faq' . '_' . $currentTimestamp . '.' . $this->image_baru_faq->getClientOriginalExtension();
            $filePathFaq = $this->image_baru_faq->storeAs(('image/'), $fileNameimageFaq, 'real_public');
            $dataFaq->image = $fileNameimageFaq;
        }



        if ($data->save() && $dataFaq->save()) {

            $this->alert('success', 'Data has been successfully updated.');
            $this->edit = 'disabled';
        } else {
            $this->alert('error', 'Data failed to update.');
        }
    }
}
