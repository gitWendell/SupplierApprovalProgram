<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Supplier;
use Livewire\Component;

class HomeComponent extends Component
{
    public $supplier, $material;

    public function render()
    {
        $this->supplier = Supplier::all();
        $this->material = Material::all();
        
        return view('livewire.home-component');
    }
}
