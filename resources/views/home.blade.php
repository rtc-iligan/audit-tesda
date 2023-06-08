@extends('layouts.app')
<style>
    .card-icon {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 10px;
  font-size:30px;
}
</style>
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <!-- Card 1 -->
        <div class="card">
          <div class="card-body text-center">
            <span class="card-icon">
                <i class="fa-solid fa-folder-closed"></i>
            </span>
            <h6 class="h4">Assessment Centers</h6>
            <h6 style="font-weight:bold;font-size:20px;">47</h6>
            <h6 style="color:#15b8a6;">Total number of assessment center</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <!-- Card 2 -->
        <div class="card">
          <div class="card-body text-center">
            <span class="card-icon">
                <i class="fa-solid fa-book"></i>
            </span>
            <h6 class="h4">Qualification</h6>
            <h6 style="font-weight:bold;font-size:20px;">140</h6>
            <h6 style="color:#15b8a6;">Total number of qualification</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <!-- Card 3 -->
        <div class="card">
         <div class="card-body text-center">
            <span class="card-icon">
                <i class="fa-sharp fa-solid fa-users"></i>
            </span>
            <h6 class="h4">Auditors</h6>
            <h6 style="font-weight:bold;font-size:20px;">10</h6>
            <h6 style="color:#15b8a6;">Total number of auditors</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <!-- Card 4 -->
        <div class="card">
          <div class="card-body text-center">
           <span class="card-icon">
                <i class="fa-sharp fa-solid fa-user"></i>
            </span>
            <h6 class="h4">Users</h6>
            <h6 style="font-weight:bold;font-size:20px;">5</h6>
            <h6 style="color:#15b8a6;">Total number of user</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 mb-2">
            <div class="card">
                <div class="card-header text-center text-white" style="background-color: #202937 !important;">
                    TOTAL LIST OF AUDITED PER QUALIFICATION
                </div>
                <div class="card-body">
                    asda
                </div>
            </div> 
        </div> 
        <div class="col-lg-3 col-md-3 col-sm-3 mb-2">
            <div class="card">
                <div class="card-header text-center text-white" style="background-color: #202937 !important;">
                    AMBOT UNSA NI
                </div>
                <div class="card-body">
                    asda
                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection
