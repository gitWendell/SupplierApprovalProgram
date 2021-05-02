<?php

namespace App\Services\MaterialAttachment;

class MaterialAttachmentServices {
    
    public function storeImage($imageFile, $location) {

        $filenameWithExt = $imageFile->getClientOriginalName();

        // Image Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Image Extension
        $extension = $imageFile->getClientOriginalExtension();

        $image = $filename . '_' . time() . '.' . $extension;

        // Upload Image
        $path = $imageFile->storeAs($location, $image);

        return $image;
    }

    public function create($request)
    {
        $create = $request;
        if($request['file'] != null) {
            $create['file'] = $this->storeImage($request['file'], 'public/material_attachment');
        }
        
        return $create;
        
    }
}