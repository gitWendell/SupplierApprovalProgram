<div class="">
    {{-- Modal Opener --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="text-lg la la-plus-circle" 
            style="font-size:20px;vertical-align: middle;"></i>
            <span style="font-size:15px;vertical-align: middle;">Material</span>
    </button> {{-- Modal Opener End --}}

    {{-- Modal Content --}}
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Material</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="form-group col">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" wire:model="material_name">
                        @error('material_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>  
                    <div class="form-group col">
                        <label for="exampleInputName">Description</label>
                        <textarea class="form-control" wire:model="description" 
                        rows="4" cols="50" style="resize: none;"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 
                    <div class="form-group col">
                        <label for="exampleInputEmail">Type</label>
                        <select class="form-control" wire:model="material_type">
                            <option value="">Select</option>
                            <option value="Raw Materials">Raw Material / Ingredient</option>
                            <option value="Packaging Material">Packaging Material</option>
                            <option value="Hazardous Chemicals">Hazardous Chemicals</option>
                            <option value="Cleaning Powder">Cleaning Powder</option>
                            <option value="Processing Aids">Processing Aids</option>
                        </select>
                        @error('material_type') <span class="text-danger">{{ $message }}</span> @enderror
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