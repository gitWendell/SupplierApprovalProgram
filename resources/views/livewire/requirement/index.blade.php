<div class="container-fluid">
    <div class="row">
        <div style="width:100%">
            <livewire:requirement.create />
            <div class="card-header bg-primary text-white" style="width:fit-content;">Requirements</div>
        </div>
        <div class="card col-md-12">
            <div class="card-body">
                <table class="table table-striped text-center" wire:transition='slide-down'>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>For</th>
                            <th>Type</th>
                            <th>File Draft</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requirements as $requirement)
                            <tr>
                                <td>{{$requirement->id}}</td>
                                <td>{{$requirement->name}}</td>
                                <td>{{$requirement->description}}</td>
                                <td>{{$requirement->for}}</td>
                                <td>{{$requirement->type}}</td>
                                <td><a href="{{asset('/storage/requirement/'.$requirement->file_draft)}}">{{$requirement->file_draft}}</a></td>
                                <td>{{$requirement->created_at}}</td>
                                <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$requirements->links('layouts.pagination')}}
            </div>
        </div>
    </div>
</div>