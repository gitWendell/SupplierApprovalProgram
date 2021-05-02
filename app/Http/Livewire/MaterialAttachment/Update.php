<?php

namespace App\Http\Livewire\MaterialAttachment;

use Livewire\Component;
use App\Models\MaterialAttachment;
use Illuminate\Support\Facades\DB;

class Update extends Component
{
    public $status, $attachment_id , $selected_id, $material_id;

    
    public function mount($id)
    {
        $this->attachment_id = $id;
    }

    protected $listeners = [
        'selectedId'
    ];

    public function selectedId($id) {
        $attachment = MaterialAttachment::where('id', $id)->first();
        
        $this->material_id = $attachment->material_id;
        $this->selected_id = $id;
    }

    public function refreshFields() {
        $this->status = '';
    }

    public function update()
    {
        MaterialAttachment::where('id', $this->selected_id)->update(['status' => $this->status]);

        $this->refreshFields();
        $this->emit('refreshParent');
        session()->flash('message', 'Material file updated.');
    }

    public function render()
    {
        return view('livewire.material-attachment.update');
    }
}
