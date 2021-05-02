<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SupplierAddress;
use App\Models\SupplierContact;
use App\Models\Material;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contactNumber', 'yearsInBusiness', 'workers', 'status',
    ];
    
    public function address()
    {
        return $this->hasMany(SupplierAddress::class);
    }

    public function contact()
    {
        return $this->hasMany(SupplierContact::class);
    }

    public function material()
    {
        return $this->hasMany(Material::class);
    }

    public function CompanyAddress()
    {
        return $this->address->where('supplier_id', $this->id)->where('type_id', 2)->first();
    }

    public function MailingAddress()
    {
        return $this->address->where('type_id', 1)->first();
    }

    public function AccountingContact()
    {
        return $this->contact->where('type_id', 1)->first();
    }

    public function FoodSafetyContact()
    {
        return $this->contact->where('type_id', 2)->first();
    }

    public function RecallContact()
    {
        return $this->contact->where('type_id', 3)->first();
    }

    public function getContactById($selectedId) {
        return $this->contact->where('type_id', $selectedId)->first();
    }

    public function isDomestic()
    {
        $country = $this->CompanyAddress()->country;
        $lowCase = strtolower($country);

        if($lowCase == 'united states' || $lowCase == 'us' || $lowCase == 'usa') {
            return 'Domestic';
        }
        
        return 'Foriegn';
    }
}
