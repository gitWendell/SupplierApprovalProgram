<?php

namespace App\Http\Livewire\Material;

use Livewire\Component;
use App\Models\Material;

class Show extends Component
{
    public $material, $material_id, $supp_id;
    
    public function mount($supplier_id, $id)
    {
        $this->material = Material::where('id', $id)->first();
        $this->material_id = $id;
        $this->supp_id = $supplier_id;
    }

    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent() {
        $this->render();
    }

    public function render()
    {
        return view('livewire.material-show');
    }
}
