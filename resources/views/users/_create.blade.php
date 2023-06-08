<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('users.store') }}" method="post">
      @csrf  
      <div class="modal-body">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Email:</label>
            <input type="email" name="email" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Roles:</label>
            <select name="role" class="form-control" id="" required>
                <option value="">Select Roles</option>
                @foreach($roles as $i => $role)
                    <option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
                @endforeach
            </select>
            <label for="">Password:</label>
            <input type="text" name="password" class="form-control text-center text-uppercase" minlength="8" onKeyPress="if(this.value.length==8) return false;" placeholder="" required>
            <input type="hidden" name="center_id" value="1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>