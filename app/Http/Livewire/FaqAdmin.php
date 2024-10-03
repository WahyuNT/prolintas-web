<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class FaqAdmin extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title;
    public $desc;

    public $edit = '';
    public $add = null;
    public $confirmDelete = null;



    public function render()
    {
        $data = Faq::all();
        $edit = $this->edit;
        $add = $this->add;
        $confirmDelete = $this->confirmDelete;

        $title = $this->title;



        return view('livewire.faq-admin', [
            'data' => $data,
            'edit' => $edit,
            'confirmDelete' => $confirmDelete,

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

        $post = new Faq([
            'title' => $this->title,
            'desc' => $this->desc,
            'is_active' => '1',

        ]);



        $this->validate([

            'title' => 'required',
            'desc' => 'required',
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
        $data = Faq::where('id', $id)->first();

        $this->title = $data->title;
        $this->desc = $data->desc;

        $this->edit = $id;
    }


    public function back()
    {
        $this->title = '';
        $this->desc = '';

        $this->edit = '';
        $this->add = '';
    }
    public function simpan()
    {
        $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $data = Faq::where('id', $this->edit)->first();
        $data->title = $this->title;
        $data->desc = $this->desc;


        

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diperbarui');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal diperbarui');
        }
    }
    public function delete($id)
    {
        $data = Faq::where('id', $id)->first();


        if ($data->delete()) {
            $this->alert('success', 'Data berhasil dihapus');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
    public function active($id)
    {
        $data = Faq::where('id', $id)->first();
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
        $data = Faq::where('id', $id)->first();
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
