<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Audit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('audits.store') }}" method="post">
      @csrf  
      <div class="modal-body">
        <div class="row col-md-12">
           
            <label for="">Name:</label>
            <select name="name" class="form-control mb-2" id="" required>
                <option value="">Select Here</option>
                @foreach(config('global.audit') as $global)
                    <option value="{{ $global['name'] }}">{{ $global['name'] }}</option>
                @endforeach
            </select>
            <label for="">TVI:</label>"
            <select name="center" class="form-control text-uppercase" id="" required> 
              <option value="">Select Here</option> 
              @foreach($center as $global) 
              <option value="{{ $global->id }}">{{ $global->tvi_name }}</option> 
              @endforeach 
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>