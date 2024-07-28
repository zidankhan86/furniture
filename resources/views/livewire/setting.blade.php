<div class="container"><br>
    <h1 class="text-center">WEB TITLE</h1><br>
    <div class="row justify-content-center">
      <div class="col-md-4">
        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form wire:submit="createTitle" class="mb-3">
          <div class="form-group">
            <label><b>TITLE</b></label>
            <input type="text" wire:model="title" class="form-control" placeholder="Enter Website Title">
            @error('title')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div><br>
          <button type="submit" class="btn btn-primary btn-sm">+ ADD</button>
          <div wire:loading>
            <span class="text-success">Loading...</span>
          </div>
        </form>
      </div>
    </div>
  </div>