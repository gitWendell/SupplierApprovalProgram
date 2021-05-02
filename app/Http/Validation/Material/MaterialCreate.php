<?php

namespace App\Http\Validation\Material;

class MaterialCreate {

    public function validation() {

        return [
            'material_name' => 'required',
            'material_type' => 'required',
            'description' => 'required',
        ];
    }
}

