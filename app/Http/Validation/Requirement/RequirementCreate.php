<?php

namespace App\Http\Validation\Requirement;

class RequirementCreate {

    public function validation() {

        return [
            'name' => 'required',
            'description' => 'required',
            'for' => 'required',
            'type' => 'required',
            'comment' => 'required',
        ];
    }
}

