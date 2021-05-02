<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Supplier;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent() {
        $this->render();
    }

    public function render()
    {
        return view('livewire.supplier.index',[
            'suppliers' => Supplier::orderBy('id', 'DESC')->paginate(10)
        ]);
    }
}
