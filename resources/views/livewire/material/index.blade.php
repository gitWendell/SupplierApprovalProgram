<div class="container-fluid">
    <div class="row">
        <div style="width:100%">
            <div class="card-header bg-primary text-white" style="width:fit-content;">Material: {{$type}} </div>
        </div>
        <div class="card col-md-12">
            <div class="card-body">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Supplier Name</th>
                            <th>Supplier Contact</th>
                            <th>Material Name</th>
                            <th>Material Description</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $material)
                            <tr>
                                <td>{{$material->id}} </td>
                                <td>{{$material->supplier->name}}</td>
                                <td>{{$material->supplier->AccountingContact()->email}}</td>
                                <td>{{$material->name}}</td>
                                <td>{{$material->description}}</td>
                                <td>{{$material->type}}</td>
                                <td>{{$material->status}}</td>
                                <td>{{$material->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="/supplier/{{$material->supplier->id}}/material/{{$material->id}}" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$materials->links('layouts.pagination')}}
            </div>
        </div>
    </div>
</div>