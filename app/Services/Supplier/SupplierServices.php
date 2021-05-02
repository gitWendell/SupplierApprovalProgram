<?php

namespace App\Services\Supplier;

class SupplierServices {

    public function createSupplier($request) {
        $create['name']              = $request['company_name'];
        $create['contactNumber']     = $request['company_phone'];
        $create['yearsInBusiness']   = $request['yearsInBusiness'];
        $create['workers']           = $request['workers'];
        $create['status']            = 'Do Not Use';

        return $create;
    }

    public function createSupplierAddress($request, $type_id, $supplier) {
        
        if ($type_id == 2) {
            $create['type_id']     = $type_id;
            $create['supplier_id'] = $supplier->id;
            $create['address']    = $request['company_address'];
            $create['zip_code']    = $request['company_zipcode'];
            $create['country']  = $request['company_country'];
            $create['fax']         = $request['company_fax'];
            $create['email']         = $request['company_email'];
            $create['contactNumber']     = $request['company_phone'];
            $create['city']     = $request['company_city'];
        } else {
            $create['type_id']     = $type_id;
            $create['supplier_id'] = $supplier->id;
            $create['address']    = $request['mailing_address'];
            $create['zip_code']    = $request['mailing_zipcode'];
            $create['country']  = $request['mailing_country'];
            $create['fax']         = $request['mailing_fax'];
            $create['email']         = $request['mailing_email'];
            $create['city']     = $request['mailing_city'];
        }
        

        return $create;
    }

    public function createSupplierContact($request, $type_id, $supplier) {
        
        if($type_id == 1) {
            $create['type_id']	   = $type_id;
            $create['supplier_id'] = $supplier->id;
            $create['name']	       = $request['accounting_name'];
            $create['position']    = $request['accounting_position'];
            $create['cp_number']    = $request['accounting_cpnumber'];
            $create['phone_fax']    = $request['accounting_phonefax'];
            $create['office_phone']    = $request['accounting_officephone'];
            $create['email']       = $request['accounting_email'];
        } else if($type_id == 2) {
            $create['type_id']	   = $type_id;
            $create['supplier_id'] = $supplier->id;
            $create['name']	       = $request['foodsafety_name'];
            $create['position']    = $request['foodsafety_position'];
            $create['cp_number']    = $request['foodsafety_cpnumber'];
            $create['phone_fax']    = $request['foodsafety_phonefax'];
            $create['office_phone']    = $request['foodsafety_officephone'];
            $create['email']       = $request['foodsafety_email'];
        } else {
            $create['type_id']	   = $type_id;
            $create['supplier_id'] = $supplier->id;
            $create['name']	       = $request['recall_name'];
            $create['position']    = $request['recall_position'];
            $create['cp_number']    = $request['recall_cpnumber'];
            $create['phone_fax']    = $request['recall_phonefax'];
            $create['office_phone']    = $request['recall_officephone'];
            $create['email']       = $request['recall_email'];
        }

        return $create;
    }
}