<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RequirementsComponent extends Component
{
    public $name, $type, $to, $draft;
    
    public function create()
    {
        dd('test');
    }

    public function render()
    {
        return view('livewire.requirements-component');
    }
}
