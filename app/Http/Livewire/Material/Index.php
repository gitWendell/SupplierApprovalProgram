<?php

namespace App\Http\Livewire\Material;

use App\Models\Material;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $type;

    protected $listeners = [
        'refreshParent'
    ];

    protected $queryString = ['type'];

    public function refreshParent() {
        $this->render();
    }

    public function render()
    {
        return view('livewire.material.index',[
            'materials' => Material::geMaterialTypes($this->type)->orderBy('id', 'DESC')->paginate(10)
        ]);
    }
}
