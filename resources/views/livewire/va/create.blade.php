<div class="container">
    <h2>Vulnerability Assessment</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h5>VA Create Question</h5>
    <form wire:submit.prevent="create">
        <div class="form-group col">
            <label for="exampleInputEmail">Vulnerability Assesment Type</label>
            <select class="form-control" wire:model="type">
                <option value="">Select</option>
                <option value="Food">Food</option>
                <option value="Supplier">Supplier</option>
            </select>
            @error('type') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col">
            <label for="exampleInputEmail">Set</label>
            <input type="text" class="form-control" wire:model="set">
            @error('set') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col">
            <label for="exampleInputEmail">Question</label>
            <textarea class="form-control" wire:model="question" rows="4" cols="50">
            </textarea>
            @error('question') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>