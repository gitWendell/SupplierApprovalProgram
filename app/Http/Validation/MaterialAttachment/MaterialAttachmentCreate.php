<?php

namespace App\Http\Validation\MaterialAttachment;

class MaterialAttachmentCreate {

    public function validation() {

        return [
            'requirement_id' => 'required',
            'comment' => 'required',
        ];
    }
}

