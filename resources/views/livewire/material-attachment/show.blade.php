<div>
    @if ($material->attachment()->exists())
    <table class="table table-striped text-center" style="margin-top: -30px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>File</th>
                <th>Status</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($material->attachment as $attachment)
                <tr>
                    <td>{{$attachment->requirement->name}} </td>
                    <td>
                        <a target="_blank" class="btn btn-primary" href="{{{ asset('/storage/material_attachment/'.$attachment->file) }}}">
                            View
                        </a>
                    </td>
                    <td>{{$attachment->status}}</td>
                    <td>{{$attachment->created_at->diffForHumans()}}</td>
                    <td>
                        <button type="button" 
                                wire:click="$emit('selectedId', {{$attachment->id}})" 
                                class="btn btn-primary" 
                                data-toggle="modal" 
                                data-target="#modalCreate">
                            Update
                        </button> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <livewire:material-attachment.update :id='$attachment->id'>
    @else
        <h3 class='mt-n4' style="text-align: center;">No Document Upload Yet</h3>
    @endif
</div>