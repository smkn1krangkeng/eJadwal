<div>
  <form wire:submit.prevent="store">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" wire:model.defer="edit-name" name="edit-name" autofocus class="form-control" placeholder="Name ...">
        @error('edit-name')
          <span class="error" style="color:red;font-size:small" >{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" wire:model.defer="edit-email" name="edit-email" class="form-control" placeholder="Email ...">
        @error('edit-email')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Old Password</label>
      <div class="col-sm-10">
        <input type="password" wire:model.defer="edit-oldpassword" name="edit-oldpassword" class="form-control" placeholder="Old Password ...">
        @error('edit-oldpassword')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">New Password</label>
      <div class="col-sm-10">
        <input type="password" wire:model.defer="edit-password" name="edit-password" class="form-control" placeholder="New Password ...">
        @error('edit-password')
          <span class="error" style="color:red;font-size:small">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="password_confirmation" class="col-sm-2 col-form-label">Re-Enter Password</label>
      <div class="col-sm-10">
        <input type="password" wire:model.defer="edit-password_confirmation" name="edit-password_confirmation" class="form-control" placeholder="Re-Enter Password ...">
        @error('edit-password_confirmation')
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