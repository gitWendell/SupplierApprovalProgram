<div class="container-fluid">
    <div class="row">
        <div style="width:100%">
            <a href="/supplier/{{$supp_id}}" class="btn btn-primary float-right">
                <i class="text-lg la la-arrow-left"></i>Back
            </a>
            <div class="card-header bg-primary text-white" style="width:fit-content;">Material Information</div>
        </div>
        <div class="card col-md-12">
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="form-group col">Name <br/> 
                            <strong>{{$material->name}}</strong> 
                        </div>
                        <div class="form-group col">Type <br/>
                            <strong>{{$material->type}}</strong> 
                        </div>
                        <div class="form-group col">Material Status <br/>
                            <strong class="badge badge-danger">{{$material->status}}</strong> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">Description <br/>
                            <strong>{{$material->description}}</strong> 
                        </div>
                        <div class="form-group col">
                        </div>
                        <div class="form-group col">Actions <br/>
                            <button class="btn btn-secondary">APRROVE</button>
                            <button class="btn btn-secondary">REJECT</button>
                            <button class="btn btn-secondary">PENDING</button>
                        </div>
                    </div>
                    <h5>Your Documents</h5>
                        <div class="jumbotron" style="padding: 4rem 2rem 0.5rem 2rem;">
                            <livewire:material-attachment.show :material='$material'>

                            <livewire:material-attachment.create :id='$material_id' :type='$material->type'>
                        </div>
                    <h5>Document Requirements</h5>
                    <livewire:requirement.show :material='$material'>
                </div>
                <livewire:response.show id={{$material_id}}/>
                <livewire:response.create id={{$material_id}}/>
            </div>
        </div>
    </div>
</div>