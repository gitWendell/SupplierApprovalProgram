<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierContact extends Model
{
    use HasFactory;
		
    protected $fillable = [
        'type_id', 'supplier_id', 'cp_number', 'phone_fax', 'office_phone', 'name', 'position', 'email',
    ];
}
