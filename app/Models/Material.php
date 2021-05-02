<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'supplier_id', 'name', 'description', 'type', 'specification', 'sds', 'status',
    ];

    public function responses() {
        return $this->hasMany(Response::class);
    }

    public function attachment() {
        return $this->hasMany(MaterialAttachment::class);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function scopeGeMaterialTypes($query, $type) {

        if($type == 'Misc/Other') {
            return $query
                    ->where('type','!=', 'Raw Materials')
                    ->where('type','!=', 'Packaging Material');
        }
        
        return $query->where('type', $type);
    }
}
