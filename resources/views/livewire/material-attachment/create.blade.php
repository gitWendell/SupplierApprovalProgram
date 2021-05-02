<div class="">
    {{-- Modal Opener --}}
    <div class="text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="text-lg la la-plus-circle" 
                style="font-size:20px;vertical-align: middle;"></i>
                <span >Upload Your Document</span>
        </button> {{-- Modal Opener End --}}
    </div>
    {{-- Modal Content --}}
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="form-group col">
                        <label for="exampleInputEmail">Type</label>
                        <select class="form-control" wire:model="requirement_id">
                            <option value="">Select</option>
                            @foreach ($requirements as $requirement)
                                <option value="{{$requirement->id}}"> {{$requirement->name}}</option>
                            @endforeach
                        </select>
                        @error('requirement_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 
                    <div class="form-group col">
                        <label for="exampleInputName">File</label>
                        <input type="file" id="file-{{$iteration}}" class="form-control" wire:model="file" >
                        @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 
                    <div class="form-group col">
                        <label for="exampleInputName">Additional Comment</label>
                        <textarea class="form-control" wire:model="comment" 
                        rows="4" cols="50" style="resize: none;"></textarea>
                        @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div> {{-- Modal Content End --}}
</div>