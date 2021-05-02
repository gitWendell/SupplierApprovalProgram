<div style="height:500px; overflow-y:auto; overflow-x:hidden;">
    @foreach ($requirements as $requirement)
        <div class="mb-4 p-2 bg-light border rounded">
            <div class="row">
                <div class="col">
                    <strong>Name</strong>
                    <p>{{$requirement->name}}</p>
                </div>
                <div class="col">
                    <strong for="">File Draft</strong>
                    @if ($requirement->file_draft == null)
                        <p>No file draft available.</p>
                    @else
                        <p><a href="{{asset('/storage/requirement/'.$requirement->file_draft)}}">
                            {{$requirement->file_draft}}
                        </a></p>
                    @endif
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <strong>Description</strong>
                    <p>{{$requirement->description}}</p>
                </div>
                <div class="col">
                    <strong>Status</strong><br/>
                    @if ($requirement->hasMaterialAtachment($requirement, $material))
                        <span class="badge badge-pill badge-primary">
                            {{$requirement->hasMaterialAtachment($requirement, $material)->status}}
                        </span>
                    @else
                        <span class="badge badge-pill badge-warning">No upload yet</span>
                    @endif
                    
                </div>
                
            </div>
            
        </div>
    @endforeach
</div>