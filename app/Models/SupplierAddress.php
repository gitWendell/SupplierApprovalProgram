<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierAddress extends Model
{
    use HasFactory;

    //					
    protected $fillable = [
        'type_id', 'supplier_id', 'email', 'address', 'zip_code', 'country', 'city', 'state',	'fax',
    ];
    
}
