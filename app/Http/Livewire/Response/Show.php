<?php

namespace App\Http\Livewire\Response;

use Livewire\Component;
use App\Models\Material;
use App\Models\Requirement;
use App\Models\Response;

class Show extends Component
{
    public $title, $comment, $material_id, $responses;
    
    public function mount($id)
    {
        $this->material_id = $id;
    }

    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent() {
        $this->render();
    }

    public function render()
    {
        $this->responses = Response::orderBy('id', 'DESC')
                ->where('material_id', $this->material_id)->get();
                
        return view('livewire.response.show')
                ->with('responses', $this->responses);
    }
}
