<div>
  <form wire:submit.prevent="store">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" wire:model.defer="name" name="name" autofocus class="form-control" placeholder="Name ...">
        @error('name')
          <span class="error" style="color:red;font-size:small" >{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" wire:model.defer="email" name="email" class="form-control" placeholder="Email ...">
        @error('email')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" wire:model.defer="password" name="password" class="form-control" placeholder="New Password ...">
        @error('password')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="password_confirmation" class="col-sm-2 col-form-label">Re-Enter Password</label>
      <div class="col-sm-10">
        <input type="password" wire:model.defer="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-Enter Password ...">
        @error('password_confirmation')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary float-right">Add</button>
      </div>
    </div>
  </form>
</div>