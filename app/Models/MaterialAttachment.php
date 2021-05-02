<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_id', 'requirement_id', 'file', 'comment', 'status'
    ];

    public function material() {
        return $this->belongsTo(Material::class);
    }

    public function requirement() {
        return $this->belongsTo(Requirement::class);
    }
}
