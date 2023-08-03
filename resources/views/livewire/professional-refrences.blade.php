<div>

<h3>Professional References</h3>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Name</label>
        <input id="" class="form-control" type="text" name="" placeholder="Enter first name" wire:model="mobile_number">
        <span class="text-danger">
          @error('mobile_number')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Organization</label>
        <input id="" class="form-control" type="text" name="" placeholder="Enter Last name" wire:model="whats_up_no">
        <span class="text-danger">
          @error('whats_up_no')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Designation</label>
        <input id="" class="form-control" type="text" name="" placeholder="Enter Last name" wire:model="whats_up_no">
        <span class="text-danger">
          @error('whats_up_no')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Contact No</label>
        <input id="" class="form-control" type="text" name="" placeholder="Enter Last name" wire:model="whats_up_no">
        <span class="text-danger">
          @error('whats_up_no')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>
  </div>

  <button >More Refrences</button>

</div>