<?php

namespace App\Http\Livewire\Supplier;

use App\Models\Material;
use Livewire\Component;
use App\Models\Supplier;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $supplier, $supplier_id, $selectedContact = 1;

    protected $listeners = [
        'refreshParent'
    ];

    public function mount($id)
    {
        $this->supplier_id = $id;
        $this->supplier = Supplier::where('id', $id)->first();
    }

    public function refreshParent()
    {
        $this->render();
    }
    
    public function render()
    {
        return view('livewire.supplier.show', [
            'materials' => Material::orderBy('id', 'DESC')->where('supplier_id', $this->supplier_id)->paginate(5)
        ]);
    }
}
