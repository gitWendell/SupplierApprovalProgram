<div>
    {{-- Modal Opener --}}
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
        <i class="text-lg la la-plus-circle"></i>Supplier
    </button> {{-- Modal Opener End --}}

    {{-- Modal Content --}}
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supplier/Vendor Questionaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn"> × </span>
                    </button>
                </div>
            <div class="modal-body">
                    <form wire:submit.prevent="create">
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputName">Company Name</label>
                                <input type="text" class="form-control" wire:model="company_name" required>
                                @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>  
                            <div class="form-group col">
                                <label for="exampleInputEmail">Date</label>
                                <input type="date" class="form-control"  wire:model="date" required>
                                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Company Address</label>
                                <input type="text" class="form-control"   wire:model="company_address" required>
                                @error('company_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group col">
                                <label for="exampleInputEmail">City</label>
                                <input type="text" class="form-control"   wire:model="company_city" required>
                                @error('company_city') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Zip Code</label>
                                <input type="text" class="form-control"   wire:model="company_zipcode" required>
                                @error('company_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Country</label>  
                                <input type="text" class="form-control"   wire:model="company_country" required>
                                @error('company_country') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Company Phone Fax</label>
                                <input type="text" class="form-control"   wire:model="company_fax" required>
                                @error('company_fax') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Company Email</label>
                                <input type="email" class="form-control"   wire:model="company_email" required>
                                @error('company_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Company Phone</label>
                                <input type="text" class="form-control"   wire:model="company_phone" required>
                                @error('company_phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <h6>Remittance Address (If different from above):</h6>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Mailing Address</label>
                                <input type="text" class="form-control"   wire:model="mailing_address">
                                @error('mailing_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">City</label>
                                <input type="text" class="form-control"   wire:model="mailing_city">
                                @error('mailing_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Zip Code</label>
                                <input type="text" class="form-control"   wire:model="mailing_zipcode">
                                @error('mailing_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Country</label>
                                <input type="text" class="form-control"   wire:model="mailing_country">
                                @error('mailing_country') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Mailing Phone Fax</label>
                                <input type="text" class="form-control"   wire:model="mailing_fax">
                                @error('mailing_fax') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Mailing Email</label>
                                <input type="email" class="form-control"   wire:model="mailing_email">
                                @error('mailing_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Mailing Contact Phone</label>
                                <input type="text" class="form-control"   wire:model="mailing_phone">
                                @error('mailing_phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                        <h5>Accounting Contacts</h3>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Contact Name</label>
                                <input type="text" class="form-control"   wire:model="accounting_name" required>
                                @error('accounting_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Title</label>
                                <input type="text" class="form-control"   wire:model="accounting_position" required>
                                @error('accounting_position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Cellphone Number</label>
                                <input type="text" class="form-control"   wire:model="accounting_cpnumber" required>
                                @error('accounting_cpnumber') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Phone Fax</label>
                                <input type="text" class="form-control"   wire:model="accounting_phonefax" required>
                                @error('accounting_phonefax') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Office Phone</label>
                                <input type="text" class="form-control"   wire:model="accounting_officephone" required>
                                @error('accounting_officephone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Contact Email</label>
                                <input type="email" class="form-control"   wire:model="accounting_email" required>
                                @error('accounting_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <h5>Food Safety Contacts</h3>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Contact Name</label>
                                <input type="text" class="form-control"   wire:model="foodsafety_name" required>
                                @error('foodsafety_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Title</label>
                                <input type="text" class="form-control"   wire:model="foodsafety_position" required>
                                @error('foodsafety_position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Cellphone Number</label>
                                <input type="text" class="form-control"   wire:model="foodsafety_cpnumber" required>
                                @error('foodsafety_cpnumber') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Phone Fax</label>
                                <input type="text" class="form-control"   wire:model="foodsafety_phonefax" required>
                                @error('foodsafety_cpnumber') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Office Phone</label>
                                <input type="text" class="form-control"   wire:model="foodsafety_officephone" required>
                                @error('foodsafety_officephone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Contact Email</label>
                                <input type="email" class="form-control"   wire:model="foodsafety_email" required>
                                @error('foodsafety_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <h5>Recall Contacts</h3>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Contact Name</label>
                                <input type="text" class="form-control"   wire:model="recall_name" required> 
                                @error('recall_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Title</label>
                                <input type="text" class="form-control"   wire:model="recall_position" required>
                                @error('recall_position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Cellphone Number</label>
                                <input type="text" class="form-control"   wire:model="recall_cpnumber" required>
                                @error('recall_cpnumber') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Phone Fax</label>
                                <input type="text" class="form-control"   wire:model="recall_phonefax" required>
                                @error('recall_phonefax') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Office Phone</label>
                                <input type="text" class="form-control"   wire:model="recall_officephone" required>
                                @error('recall_officephone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Contact Email</label>
                                <input type="email" class="form-control" wire:model="recall_email" required>
                                @error('recall_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="exampleInputEmail">Number of years in business</label>
                                <input type="text" class="form-control"   wire:model="yearsInBusiness" required>
                                @error('yearsInBusiness') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputEmail">Number of workers</label>
                                <input type="text" class="form-control"   wire:model="workers" required>
                                @error('workers') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Save</button>
                        <div wire:loading wire:target="create">
                            <div class="la-ball-beat la-dark la-sm">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> {{-- Modal Content End --}}
</div>