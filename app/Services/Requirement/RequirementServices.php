<?php

namespace App\Services\Requirement;

class RequirementServices {
    
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

    public function createRequirement($request)
    {
        $create = $request;

        if($request['file_draft'] != null) {
            $create['file_draft'] = $this->storeImage($request['file_draft'], 'public/requirement');
        }

        return $create;
    }
}