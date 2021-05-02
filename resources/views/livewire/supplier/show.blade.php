<div class="container-fluid">
    <div class="row">
        <div style="width:100%">
            <a href="/supplier" class="btn btn-primary float-right">
                <i class="text-lg la la-arrow-left"></i>Back
            </a>
            <div class="card-header bg-primary text-white" style="width:fit-content;">
                Supplier Onboarding: 
                <span class="badge badge-success">{{$supplier->isDomestic()}}</span>
                
            </div>
        </div>
        <div class="card col-md-12">
            <div class="card-body">
                <div class="row">
                    <div class="panel panel-default col" >
                        <h6 class="bg-primary text-white p-2 rounded mt-4 font-weight-normal" 
                            style="width:fit-content;">
                            Information
                        </h6>
                        <div style="
                                margin-top:-15px;
                                background-color:#f2f2f2;
                                border-top: 5px solid #1d62f0;
                                ">
                            <div class="row m-0">
                                <div class="form-group col">
                                    Name <br/>
                                    <strong>{{$supplier->name}}</strong> 
                                </div>
                                <div class="form-group col">
                                    Address <br/>
                                     <strong>{{$supplier->CompanyAddress()->address}}</strong> 
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="form-group col">
                                    Contact Number <br />
                                    <strong>{{$supplier->contactNumber}}</strong>
                                </div>
                                <div class="form-group col">
                                    Company Email <br />
                                    <strong>{{$supplier->CompanyAddress()->email}}</strong> 
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="form-group col">Contry <br />
                                    <strong>{{$supplier->CompanyAddress()->country}}</strong> 
                                </div>
                                <div class="form-group col">City <br />
                                    <strong>{{$supplier->CompanyAddress()->city}}</strong> 
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="form-group col">Number of years in business <br />
                                    <strong>{{$supplier->yearsInBusiness}}</strong> 
                                </div>
                                <div class="form-group col">Number of workers <br />
                                    <strong>{{$supplier->workers}}</strong> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default col" >
                        <div class="w-100">
                            <h6 class="bg-primary text-white p-2 rounded mt-4 font-weight-normal" 
                                style="width:fit-content;">
                                Contacts
                            </h6>
                            <div style="
                                    margin-top:-15px;
                                    background-color:#f2f2f2;
                                    border-top: 5px solid #1d62f0;
                                    ">
                                    
                                <div class="row m-0">
                                    <select class="form-control" wire:model='selectedContact'>
                                        <option value="1" selected="selected">Accounting Contact</option>
                                        <option value="2">Food Safety Contact</option>
                                        <option value="3">Recall Contact</option>
                                    </select>
                                </div>
                                @if ($selectedContact)
                                    <div class="row m-0">
                                        <div class="form-group col">Contact Name <br/>
                                            <strong>{{$supplier->getContactById($selectedContact)->name}}</strong>
                                        </div>
                                        <div class="form-group col">Title <br/>
                                            <strong>{{$supplier->getContactById($selectedContact)->position}}</strong>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="form-group col">Cellphone Number <br/>
                                            <strong>{{$supplier->getContactById($selectedContact)->cp_number}}</strong>
                                        </div>
                                        <div class="form-group col">Phone Fax <br/>
                                            <strong>{{$supplier->getContactById($selectedContact)->phone_fax}}</strong>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="form-group col">Office Phone<br/>
                                            <strong>{{$supplier->getContactById($selectedContact)->office_phone}}</strong>
                                        </div>
                                        <div class="form-group col">Contact Email<br/>
                                            <strong>{{$supplier->getContactById($selectedContact)->email}}</strong>
                                        </div>
                                    </div>
                                @else
                                
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default w-100" >
                    <h6 class="bg-primary text-white p-2 rounded mt-4 font-weight-normal"
                         style="width:fit-content;">
                         Criteria
                    </h6>
                    <div style="
                            margin-top:-15px;
                            background-color:#f2f2f2;
                            border-top: 5px solid #1d62f0;
                            ">
                        <div class="row m-0">
                            <div class="form-group col">Document: <strong class="badge badge-warning">7 out of 10</strong> 
                                <a href="/supplier/{{$supplier->id}}/requirements" class="">
                                    <i class="text-lg la la-arrow-right"></i> Go to Document
                                </a>
                            </div>
                            <div class="form-group col">Status: <strong class="badge badge-danger"> Do Not Use </strong></div>
                            <div class="form-group col" style="font-size:20px;">Overall Score: <strong class="badge badge-primary">70</strong> </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group col">Quality & Delivery: <strong class="badge badge-primary"> Good </strong></div>
                            <div class="form-group col">Emergency Use ? <strong class="badge badge-primary"> No </strong> </div>
                            <div class="form-group col">Actions <br/>
                                <button class="btn btn-secondary">APRROVE</button>
                                <button class="btn btn-secondary">REJECT</button>
                                <button class="btn btn-secondary">PENDING</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

                <h3>Material List</h3>
                <livewire:material.create :id='$supplier_id'>
                <table id="table-list" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $material)
                        <tr>
                            <td>{{$material->id}} </td>
                            <td>{{$material->name}}</td>
                            <td>{{$material->description}}</td>
                            <td>{{$material->type}}</td>
                            <td>{{$material->status}}</td>
                            <td>
                            <a href="/supplier/{{$supplier->id}}/material/{{$material->id}}" class="btn btn-primary">
                                View
                            </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$materials->links('layouts.pagination')}}
                <div>
                    
                </div>
            </div>
        </div>  
    </div>
</div>