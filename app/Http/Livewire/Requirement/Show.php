<?php

namespace App\Http\Livewire\Requirement;

use Livewire\Component;
use App\Models\Material;
use App\Models\Requirement;

class Show extends Component
{
    public $requirements, $material;
    
    public function mount($material)
    {
        $require = new Requirement();
        $this->material = $material;
        $this->requirements = $require->getRequirement($material->type);
    }

    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent() {
        $this->render();
    }

    public function render()
    {
        return view('livewire.requirement.show');
    }
}
