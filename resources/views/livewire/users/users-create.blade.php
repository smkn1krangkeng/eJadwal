<div>
  <form wire:submit.prevent="store">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" wire:model="name" name="name" autofocus class="form-control" placeholder="Name ...">
        @error('name')
          <span class="error" style="color:red;font-size:small" >{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" wire:model="email" name="email" class="form-control" placeholder="Email ...">
        @error('email')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="button" wire:click="read" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary float-right">Add</button>
      </div>
    </div>
  </form>
</div>