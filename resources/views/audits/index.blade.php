@extends('layouts.app')

@section('content')
@include('audits._create')
<div class="container-fluid "  data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" >
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                           <h5>
                                <i class="fa-solid fa-bars"></i>&nbsp;{{ __('Audit Management') }}
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
                           
                            <div class="col-1">
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-magnifying-glass"></i> &nbsp;Search
                                </button>
                            </div>
                            <div class="col-7">
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
                                <th scope="col">TVI</th>
                                <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($audit as $i => $center)
                                <tr>
                                <td>{{ ++ $i }}</td>
                                <td>{{ $center->name }}</td>
                                <td>{{ $center->tvi_name}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button class="dropdown-item" href="#">
                                                    <i class="fa-solid fa-eye"></i>&nbsp;&nbsp;View
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item" href="#">
                                                <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Update
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item" href="#">
                                                <i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Delete
                                                </button>
                                            </li>
                                        </ul>
                                     </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    
@endsection
