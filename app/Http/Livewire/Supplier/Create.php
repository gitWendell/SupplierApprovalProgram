<?php

namespace App\Http\Livewire\Supplier;

use App\Http\Validation\Supplier\SupplierCreate;
use Livewire\Component;
use App\Models\Supplier;
use App\Models\SupplierAddress;
use App\Models\SupplierContact;
use App\Services\Supplier\SupplierServices;
use Livewire\WithPagination;

class Create extends Component
{
    use WithPagination;

    public $company_name,     $company_phone,       $company_email,     $mailing_email,  
            $workers,         $date,                $company_address,
            $company_city,    $company_zipcode,     $yearsInBusiness,
            $company_country, $company_fax,         $mailing_address, 
            $mailing_city,    $mailing_zipcode, 
            $mailing_country, $mailing_fax,         $mailing_phone, 
            $accounting_name, $accounting_position, $accounting_email, 
            $foodsafety_name, $foodsafety_position, $foodsafety_email, 
            $recall_name,     $recall_position,     $recall_email;

    // Added
    public $accounting_cpnumber, $accounting_phonefax, $accounting_officephone;
    public $foodsafety_cpnumber, $foodsafety_phonefax, $foodsafety_officephone;
    public $recall_cpnumber, $recall_phonefax, $recall_officephone;

    public function supplierInformation($supplier_id)
    {
        return view('livewire.material-component');
    }

    public function updated($field) {
        $validation = new SupplierCreate();
        
        $this->validateOnly($field, $validation->validation());
    }

    public function refreshFields() {
        
        $this->company_name='';    $this->company_phone='';       $this->yearsInBusiness='';
        $this->workers='';         $this->date='';                $this->company_address='';
        $this->company_city='';    $this->company_zipcode='';     $this->company_email = '';
        $this->company_country=''; $this->company_fax='';         $this->mailing_address='';
        $this->mailing_city='';    $this->mailing_zipcode='';     $this->mailing_email = '';
        $this->mailing_country=''; $this->mailing_fax='';         $this->mailing_phone=''; 
        $this->accounting_name=''; $this->accounting_position=''; $this->accounting_email=''; 
        $this->foodsafety_name=''; $this->foodsafety_position=''; $this->foodsafety_email=''; 
        $this->recall_name='';     $this->recall_position='';     $this->recall_email='';

        // Added
        $this->accounting_cpnumber='';     $this->accounting_phonefax='';     $this->accounting_officephone='';
        $this->foodsafety_cpnumber='';     $this->foodsafety_phonefax='';     $this->foodsafety_officephone='';
        $this->recall_cpnumber='';     $this->recall_phonefax='';     $this->recall_officephone='';
    }

    public function create(SupplierServices $supplierServices, SupplierCreate $validation) {
        
        $this->dispatchBrowserEvent('close-modal');

        $validated = $this->validate($validation->validation());
        
        ($this->mailing_address != '') ? $validated['mailing_address'] = $this->mailing_address : '';

        $supplier = Supplier::create($supplierServices->createSupplier($validated));

        if($supplier) {
            SupplierAddress::create($supplierServices->createSupplierAddress($validated, 2, $supplier));

            if($this->mailing_address != '') {
                SupplierAddress::create($supplierServices->createSupplierAddress($validated, 1, $supplier));
            }

            for ($i = 1; $i <= 3; $i++) {
                SupplierContact::create($supplierServices->createSupplierContact($validated, $i, $supplier));
            }
        }

        $this->refreshFields();
        $this->emit('refreshParent');
        session()->flash('message', 'Supplier added.');

    }

    public function render()
    {
        return view('livewire.supplier.create');
    }
}
