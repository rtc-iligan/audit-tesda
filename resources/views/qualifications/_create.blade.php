<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Qualification</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('qualifications.store') }}" method="post">
      @csrf  
      <div class="modal-body">
        <div class="row col-md-12">
            <label for="">Name:</labesl>
            <input type="text" name="name" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Abbreviation:</label>
            <input type="text" name="abrv" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Sector:</label>
            <select name="sector" class="form-control" id="" required>
                <option value="">Select Here</option>
                @foreach(config('global.sector') as $global)
                    <option value="{{ $global['name'] }}">{{ $global['name'] }}</option>
                @endforeach
            </select>
            <label for="">Accreditation Number:</label>
            <input type="text" name="acc_number" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Date Accredited:</label>
            <input type="date" name="date" class="form-control text-center text-uppercase mb-2" placeholder="" required>
            <label for="">Audit Typer per TVI:</label>
            <select name="audit" class="form-control" id="" required>
                <option value="">Select Here</option>
                @foreach($audit as $global)
                    <option value="{{ $global->id }}">{{ $global->name }} ---> {{ $global->tvi_abrv }}</option>
                @endforeach
            </select>
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