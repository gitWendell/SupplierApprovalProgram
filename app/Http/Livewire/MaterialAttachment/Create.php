<?php

namespace App\Http\Livewire\MaterialAttachment;

use App\Http\Validation\MaterialAttachment\MaterialAttachmentCreate;
use App\Models\MaterialAttachment;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Requirement;
use App\Services\MaterialAttachment\MaterialAttachmentServices;

class Create extends Component
{
    use WithFileUploads;

    public $requirement_id, $file, $comment;

    public $requirements, $material_id, $iteration = 0;

    public function mount($id, $type)
    {
        $require = new Requirement();

        $this->material_id = $id;
        $this->requirements = $require->getRequirement($type);
    }

    public function refreshFields()
    {
        $this->requirement_id= '';
        $this->comment= '';
        $this->file = null;
        $this->iteration++;
    }

    public function updated($field) {
        $validation = new MaterialAttachmentCreate();

        $this->validateOnly($field, $validation->validation());
    }

    public function create(MaterialAttachmentCreate $validation, MaterialAttachmentServices $materialAttachmentServices)
    {
        $validated = $this->validate($validation->validation());
        $validated['file'] = $this->file;
        $validated['material_id'] = $this->material_id;
        
        MaterialAttachment::create($materialAttachmentServices->create($validated));

        $this->emit('refreshParent');
        $this->refreshFields();
        session()->flash('message', 'Material attachment added.');
    }

    public function render()
    {
        return view('livewire.material-attachment.create');
    }
}
