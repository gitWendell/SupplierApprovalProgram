<?php

namespace App\Http\Livewire\Response;

use App\Http\Validation\Requirement\RequirementCreate;
use App\Models\MaterialAttachment;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Requirement;
use App\Models\Response;
use App\Services\Requirement\RequirementServices;

class Create extends Component
{
    use WithFileUploads;
    
    public $title, $comment, $material_id, $responses;

    protected $rules = [
        'title' => 'required',
        'comment' => 'required',
    ];

    protected $listeners = [
        'selectedId'
    ];

    public function mount($id){
        $this->material_id = $id;
    }

    public function selectedId($id) {
        $attachment = MaterialAttachment::where('id', $id)->first();
        
        $this->material_id = $attachment->material_id;
        $this->title = "Response to: ". $attachment->requirement->name;
    }

    public function updated($field) {
        
        $this->validateOnly($field);
    }

    public function refreshFields()
    {
        $this->title = '';
        $this->comment = '';
    }

    public function create()
    {
        $validated = $this->validate();
        $validated['material_id'] = $this->material_id;

        Response::create($validated);

        $this->emit('refreshParent');

        $this->refreshFields();
        session()->flash('message', 'Response added.');
    }

    public function render()
    {
        return view('livewire.response.create');
    }
}
