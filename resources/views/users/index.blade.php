@extends('layouts.app')

@section('content')
@include('users._create')
<div class="container-fluid "  data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" >
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-white" style="background-color: #202937 !important;">
                    <div class="row">
                        <div class="col-6">
                           <h5>
                                <i class="fa-solid fa-bars"></i>&nbsp;{{ __('User Management') }}
                           </h5>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createModal">
                                <i class="fa-solid fa-plus"></i>&nbsp;Create
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body" >
                    <div class="">
                        <div class="row">
                            <div class="col-4">
                                <input type="search" class="form-control" placeholder="Search Firstname, Lastname or ID Number ...">
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
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $i => $user)
                                <tr>
                                    <td scope="row">{{ ++$i}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @php
                                            $roles = null;
                                        @endphp
                                        @foreach($user->roles as $role)
                                        @php
                                            $roles .= ucwords($role->name).', ';
                                        @endphp
                                        @endforeach
                                        {{ $roles }}
                                    </td>
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
