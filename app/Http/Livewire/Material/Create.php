<?php

namespace App\Http\Livewire\Material;

use App\Http\Validation\Material\MaterialCreate;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Material;
use App\Models\Requirement;
use App\Models\Supplier;
use App\Services\Material\MaterialServices;

class Create extends Component
{
    use WithFileUploads;

    public $material_name, $material_type, $material_specification, 
           $material_sds, $description;

    public $iteration = 1, $supplier_id, $materials;


    public function mount($id)
    {
        $this->supplier_id = $id;
    }

    public function refreshFields()
    {
        $this->material_name = '';
        $this->material_type = '';
        $this->description = '';
        $this->material_specification = null;
        $this->material_sds = null;
        $this->iteration++;
    }

    public function updated($field) {
        $validation = new MaterialCreate();

        $this->validateOnly($field, $validation->validation());
    }

    public function create(MaterialServices $materialServices, MaterialCreate $validation)
    {
        $validated = $this->validate($validation->validation());
        $validated['supplier_id']  = $this->supplier_id;
        
        Material::create($materialServices->createMaterial($validated));
        
        $this->refreshFields();
        $this->emit('refreshParent');
        session()->flash('message', 'Material added.');
    }

    public function render()
    {
        return view('livewire.material.create');
    }
}
