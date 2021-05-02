<div>
    {{-- Modal Content --}}
    <div wire:ignore.self class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn"> × </span>
                    </button>
                </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="form-group col">
                        <label for="exampleInputEmail">Status</label>
                        <select class="form-control" wire:model="status">
                            <option value="">Select</option>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Reject">Reject</option>
                            <option value="Rework">Rework</option>
                        </select>
                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
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
                <livewire:response.create :id='$material_id'>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> {{-- Modal Content End --}}
</div>
