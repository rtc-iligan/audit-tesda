<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Requirements</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('requirements.store') }}" method="post">
      @csrf  
      <div class="modal-body">
        <div class="row col-md-12">
            
          <div class="col-md-6">
          <label for="">TVI:</label>
            
            <input type="search" class="form-control text-center text-uppercase tvi-search" name="tvi" id="tvi-input" autocomplete="off">
          
          </div>
            <div class="col-md-6">
            <label for="">Audit Type:</label>
            <select name="mySelect" id="mySelect" class="form-control text-center text-uppercase">
              
            </select>

            </div>
            
           <div class="col-md-12">
           <label for="">Qualification:</label>
            <select name="quali" id="myQuali" class="form-control text-center text-uppercase" id="" required>
               
            </select>
           </div>
            
            <label for="">Document Type:</label>
            <div id="myDocType" class="d-flex flex-wrap">
          
            </div>
            <input type="hidden" name="user" value="{{auth()->user()->id}}">
            
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
