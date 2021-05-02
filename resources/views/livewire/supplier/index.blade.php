<div class="container-fluid">
    <div class="row">
        <div style="width:100%">
            <livewire:supplier.create />
            <div class="card-header bg-primary text-white" style="width:fit-content;">All Supplier</div>
        </div>
        <div class="card col-md-12">
            <div class="card-body">
                <table class="table table-striped text-center" wire:transition='slide-down'>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone #</th>
                            <th>Company Email</th>
                            <th>Country of Origin</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{$supplier->id}} </td>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->CompanyAddress()->address}}</td>
                                <td>{{$supplier->contactNumber}}</td>
                                <td>{{$supplier->CompanyAddress()->email}}</td>
                                <td>{{$supplier->CompanyAddress()->country}}</td>
                                <td>{{$supplier->status}}</td>
                                <td>{{$supplier->created_at->diffForHumans()}}</td>
                                <td><a href="/supplier/{{$supplier->id}}" class="btn btn-sm btn-primary">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$suppliers->links('layouts.pagination')}}
            </div>
        </div>
    </div>
</div>