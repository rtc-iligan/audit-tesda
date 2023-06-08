@extends('layouts.app')

@section('content')
@include('requirements._create')
<div class="container-fluid"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" >
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                           <h5>
                                <i class="fa-solid fa-bars"></i>&nbsp;{{ __('Requirements Management') }}
                           </h5>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createModal">
                                <i class="fa-solid fa-plus"></i>&nbsp;Create
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="row">
                            <div class="col-4">
                                <input type="search" class="form-control" placeholder="Search Name, Abrv or Sector ...">
                            </div>
                            <div class="col-2">
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-magnifying-glass"></i> &nbsp;Search
                                </button>
                            </div>
                            <div class="col-5">
                                <button class="btn btn-sm btn-primary float-end">
                                    <i class="fa-solid fa-filter-list"></i> &nbsp;Filter
                                </button>
                            </div>
                        </div>
                        <div class="filter-div">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <table class="table table-striped table-hover border">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Sector</th>
                                <th scope="col">Date Accredited</th>
                                <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">

    var path = "{{ url('tvi-suggestions') }}";
    $('input.tvi-search').typeahead({
        source:  function (str, process){
          return $.get(path, { str: str }, function (data) {
                return process(data);
            });
        }
    });
    $('.tvi-search').on('change',function(e){
        var myString = $('.tvi-search').val();
        if(!(myString)){$("#mySelect").empty();$("#myQuali").empty();$("#myDocType").empty();}
        else{
            $.ajax({
            url: '{{ url('tvi-audit') }}',
            method: 'POST',
            data: {
                myString: myString,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                
                var select = $("#mySelect");
                if(response.length === 0){
                    var option = $("<option>There is no audit type registered</option>");
                    select.append(option);
                }
                else{
                    var option1 = $("<option>Select Audit Type</option>");
                    select.append(option1);
                    $.each(response, function(index, item) {
                        var option = $("<option></option>").val(item.id).text(item.name);
                        select.append(option);
                    });
                }
            }
        });
        }
    });
    $('#mySelect').on('change',function(e){
        $("#myQuali").empty();$("#myDocType").empty();
        var myAuditType = $('#mySelect').val();
        //console.log(myAuditType);
        $("#myQuali").empty();
        var myDocTypesss = $("#myDocType");
       
        if (myAuditType === 'Select Audit Type' || myAuditType.length === 0 ) {
            myDocTypesss.remove();
            console.log('asndajsdbasjhjdas');
        }
        $.ajax({
            url: '{{ url('audit-qualifications') }}',
            method: 'POST',
            data: {
                myAuditType: myAuditType,
                _token: '{{ csrf_token() }}'
            },
            success: function(response, status, xhr) {
                
                if (status === "error") {
                    console.log("Error: " + xhr.status + " " + xhr.statusText);
                }else{
                    var select = $("#myQuali");
                    if(response.length === 0){
                        var option = $("<option>There is no registered qualification</option>");
                        select.append(option);
                    }
                    else{
                        $("#myQuali").empty();
                        var option1 = $("<option>Select Qualification</option>");
                        select.append(option1);
                        $.each(response, function(index, item) {
                            var option = $("<option></option>").val(item.id).text(item.name);
                            select.append(option);
                        });
                    }
                }
            }
        });
        
    });
    $('#myQuali').on('change',function(e){

        var myDocType = $('#mySelect').val();
        var myQuali = $("#myQuali").val();
        var myDocTypesss = $("#myDocType");
        var myQualiDiv = $("#myDocType");
        if (myQuali === 'Select Qualification') {
            $(".wrapperDiv").hide();
            
        }else{
            $(".wrapperDiv").hide();
            $.ajax({
                    url: '{{ url('qualifications-doc-type') }}',
                    method: 'POST',
                    data: {
                        myDocType: myDocType,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response, status, xhr) {
                        
                        if (status === "error") {
                            console.log("Error: " + xhr.status + " " + xhr.statusText);
                        }else{
                     
                        if (response.length === 0) {
                            var label = $('<label>There is no document type registered in this qualification</label>');
                            myQualiDiv.append(label);
                            } else {
                            $.each(response, function(index, item) {
                                var checkbox = $('<input type="checkbox" name="docType[]" class="myCheckbox" style="margin-left:10px !important;margin-right:5px;margin-top:4px;" value="' + item.id + '" />');
                                var label = $('<label style="margin-right:5px;margin-top:4px;">' + item.name + '</label>').prepend(checkbox);
                                var wrapperDiv = $('<div class="wrapperDiv" style="border-style: solid; border-width:0.5px; border-color: black;margin-left:10px;margin-bottom:10px; height: 32px;border-radius:5px;background-color:#f7f7f7;"></div>').append(checkbox, label);
                                myQualiDiv.append(wrapperDiv);
                            });
                            
                            }
                        }
                    }
                });
        }
        
    });
    
    
</script>  
@endsection
