<?php

namespace App\Http\Livewire;

use App\Models\Messages;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MessagesAdmin extends Component
{
    use LivewireAlert;
    public $confirmDelete = null;


    public function render()
    {
        $data = Messages::orderBy('created_at', 'asc')
            ->get();
        $confirmDelete = $this->confirmDelete;

        return view('livewire.messages-admin', [
            'data' => $data,
            'confirmDelete' => $confirmDelete
        ]);
    }

    public function deleteConfirm($id)
    {
        $this->confirmDelete = $id;
    }
    public function cancelDelete()
    {
        $this->confirmDelete = null;
    }
    public function delete($id)
    {
        $data = Messages::where('id', $id)->first();

        if ($data->delete()) {
            $this->alert('success', 'Data has been successfully deleted.');
            $this->confirmDelete = null;
        } else {
            $this->alert('error', 'Data failed to delete.');
        }
    }
}
