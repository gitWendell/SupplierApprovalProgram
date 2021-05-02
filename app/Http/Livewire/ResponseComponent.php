<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Response;
use Livewire\Component;

class ResponseComponent extends Component
{
    public $title, $comment, $material_id, $responses;

    protected $rules = [
        'title' => 'required',
        'comment' => 'required',
    ];

    public function updated($field) {
        
        $this->validateOnly($field);
    }

    public function refreshFields()
    {
        $this->title = '';
        $this->comment = '';
    }

    public function mount($id)
    {
        $this->material_id = $id;
    }

    public function create()
    {
        $validated = $this->validate();
        $validated['material_id'] = $this->material_id;

        Response::create($validated);
        
        $this->refreshFields();
        session()->flash('message', 'Response added.');
    }

    public function render()
    {
        $this->responses = Response::orderBy('id', 'DESC')
                ->where('material_id', $this->material_id)->get();
                
        return view('livewire.response-component')
                ->with('responses', $this->responses);
    }
}
