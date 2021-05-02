<?php

namespace App\Http\Livewire\Requirement;

use App\Models\Requirement;
use Livewire\Component;
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
        return view('livewire.requirement.index',[
            'requirements' => Requirement::orderBy('id', 'DESC')->paginate(10)
        ]);
    }
}
