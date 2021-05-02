<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VAQuestion;

class VAComponent extends Component
{
    public $type, $question, $set; 

    protected $rules = [
        'type' => ['required'],
        'set' => ['required'],
        'question' => ['required', 'string', 'max:255'],
    ];

    public function updated($field) {
        $this->validateOnly($field);
    }

    public function refreshFields() {
        $this->type = '';
        $this->set = '';
        $this->question = '';
    }

    public function create()
    {
        VAQuestion::create([
            'type' => $this->type,
            'set' => $this->set,
            'question' => $this->question,
        ]);

        $this->refreshFields();
        session()->flash('message', 'VA Question added.');
    }

    public function render()
    {
        return view('livewire.v-a-component');
    }
}
