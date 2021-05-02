<?php

namespace App\Http\Validation\Supplier;

class SupplierCreate {

    public function validation() {

        return [
            'company_name' => ['required', 'string', 'min:6'],
            'company_fax' => 'required',
            'company_phone' => 'required', 
            'company_city' => 'required',
            'company_email' => 'required',
            'company_address' => 'required', 
            'company_zipcode' => 'required',
            'company_country' => 'required',
            'yearsInBusiness' => 'required', 
            'workers' => 'required', 
            'date' => 'required|date',
    
            'mailing_city' => 'required_with:mailing_address',         
            'mailing_zipcode' => 'required_with:mailing_address',   
            'mailing_country' => 'required_with:mailing_address', 
            'mailing_email' => 'required_with:mailing_address',
            'mailing_fax' => 'required_with:mailing_address',         
            'mailing_phone' => 'required_with:mailing_address',
    
            'accounting_name' => 'required', 
            'accounting_cpnumber' => 'required',
            'accounting_officephone' => 'required',
            'accounting_phonefax' => 'required',
            'accounting_email' => ['required', 'string', 'email', 'max:255'],
            'accounting_position' => 'required',
    
            'foodsafety_name' => 'required',
            'foodsafety_position' => 'required',
            'foodsafety_cpnumber' => 'required',
            'foodsafety_officephone' => 'required',
            'foodsafety_phonefax' => 'required',
            'foodsafety_email' => ['required', 'string', 'email', 'max:255'],
    
            'recall_name' => 'required',
            'recall_position' => 'required',
            'recall_cpnumber' => 'required',
            'recall_officephone' => 'required',
            'recall_phonefax' => 'required',
            'recall_email' => ['required', 'string', 'email', 'max:255'],
        ];
    }
}

