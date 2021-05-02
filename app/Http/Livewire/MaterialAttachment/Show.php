<?php

namespace App\Http\Livewire\MaterialAttachment;

use Livewire\Component;
use App\Models\Requirement;

class Show extends Component
{
    public $material, $supplier_id;
    
    public function mount($material)
    {
        $this->material = $material;
    }

    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent() {
        
        $this->render();
    }

    public function render()
    {
        return view('livewire.material-attachment.show');
    }
}
