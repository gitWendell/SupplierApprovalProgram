<div class="container">
    <h4>Create Response</h4>
    <form wire:submit.prevent="create">
        <div class="form-group col">
            <label for="exampleInputName">Title</label>
            <input type="text" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div> 
        <div class="form-group col">
            <label for="exampleInputName">Comment</label>
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
