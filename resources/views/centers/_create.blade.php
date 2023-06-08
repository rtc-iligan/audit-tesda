<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Assessment Center</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('centers.store') }}" method="post" enctype="multipart/form-data">
      @csrf  
      <div class="modal-body">
        <div class="row col-md-12">
            <label for="">Name:</labesl>
            <input type="text" name="tvi_name" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Abbreviation:</label>
            <input type="text" name="tvi_abrv" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Location:</label>
            <input type="text" name="tvi_location" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">AC Manager:</label>
            <input type="text" name="tvi_manager" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Contact Number:</label>
            <input type="number" name="tvi_manager_contact" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Contact Person:</label>
            <input type="text" name="tvi_person" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Contact Number:</label>
            <input type="number" name="tvi_person_contact" class="form-control text-center text-uppercase" placeholder="" required>
            <label for="">Logo:</label>
            <input type="file" name="tvi_image" class="form-control text-center text-uppercase" placeholder="" required>
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