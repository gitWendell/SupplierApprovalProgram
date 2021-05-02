<div>
    {{-- Modal Opener --}}
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalCreate">
        <i class="text-lg la la-plus-circle"></i>Requirement
    </button> {{-- Modal Opener End --}}

    {{-- Modal Content --}}
    <div wire:ignore.self class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Requirement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn"> × </span>
                    </button>
                </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="form-group col">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 
                    <div class="form-group col">
                        <label for="exampleInputName">Description</label>
                        <textarea class="form-control" wire:model="description" 
                        rows="4" cols="50" style="resize: none;"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 
                    <div class="form-group col">
                        <label for="exampleInputEmail">For</label>
                        <select class="form-control" wire:model="for">
                            <option value="">Select</option>
                            <option value="Supplier">Supplier</option>
                            <option value="Material">Material</option>
                        </select>
                        @error('for') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group col">
                        <label for="exampleInputEmail">Type
                            <div wire:loading wire:target="for">
                                <div class="la-ball-beat la-dark la-sm">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </label>
                        <select class="form-control" wire:model="type">
                            <option value="">Select</option>
                            @if ($for == "Supplier")
                                <option value="Foreign Supplier">Foreign Supplier</option>
                                <option value="Domestic Supplier">Domestic Supplier</option>
                            @elseif($for == "Material")
                                <option value="Raw Materials">Raw Material / Ingredient</option>
                                <option value="Packaging Material">Packaging Material</option>
                                <option value="Misc/Other">Misc/Other</option>
                            @endif
                        </select>
                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputName">File Draft</label>
                        <input type="file" id="file-{{$iteration}}" class="form-control" wire:model="file_draft">
                        @error('file_draft') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> {{-- Modal Content End --}}
</div>