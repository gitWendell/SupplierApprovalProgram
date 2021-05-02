<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
		
    protected $fillable = [
        'name', 'description', 'comment', 'for', 'type', 'file_draft',
    ];

    public function getRequirement($type) {
        return $this->where('type', $type)->get();
    }

    public function attachment() {
        return $this->hasOne(MaterialAttachment::class);
    }

    public function hasMaterialAtachment($requirement, $material) {
        $exist = $material->attachment()->where('requirement_id', $requirement->id)->first();
        
        return $exist;
    }

}
