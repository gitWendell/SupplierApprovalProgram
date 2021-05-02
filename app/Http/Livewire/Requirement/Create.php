<?php

namespace App\Http\Livewire\Requirement;

use App\Http\Validation\Requirement\RequirementCreate;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Material;
use App\Models\Requirement;
use App\Services\Material\MaterialServices;
use App\Services\Requirement\RequirementServices;

class Create extends Component
{
    use WithFileUploads;
    
    public $name, $description, $for, $type, $file_draft, $comment;
    public $iteration = 1;

    public function refreshFields()
    {
        $this->name = '';
        $this->description = '';
        $this->for = '';
        $this->type= '';
        $this->comment= '';
        $this->file_draft = null;
        $this->iteration++;
    }

    public function updated($field) {
        $validation = new RequirementCreate();

        $this->validateOnly($field, $validation->validation());
    }

    public function create(RequirementServices $requirementServices, RequirementCreate $validation)
    {
        $validated = $this->validate($validation->validation());
        $validated['file_draft'] = $this->file_draft;

        Requirement::create($requirementServices->createRequirement($validated));

        $this->emit('refreshParent');

        $this->refreshFields();
        session()->flash('message', 'Requirement added.');
    }

    public function render()
    {
        return view('livewire.requirement.create');
    }
}
