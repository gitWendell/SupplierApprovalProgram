<?php

namespace App\Services\Material;

class MaterialServices {

    public function createMaterial($request)
    {
        $create['supplier_id'] = $request['supplier_id'];
        $create['name'] = $request['material_name'];
        $create['type'] = $request['material_type'];
        $create['description'] = $request['description'];
        $create['status'] = 'Do Not Use';

        return $create;
    }
}