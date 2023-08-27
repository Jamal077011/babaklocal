@extends('frontend.dashboard.layouts.master')
@section('title', 'Sponsored')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-6"><h3 class="">{{__('Dashboard.Sponsored')}}</h3>
                            <a href="" class="btn btn-success"><b><i class="fas fa-plus"></i>{{__('Dashboard.Add new Sponsored')}}</b></a>
                        </div>
                        <div class="col-6 ">
                            <form>
                                <div class="row">
                                    <div class=" col-md-4 ">
                                        <label for="exampleFormControlInput1">{{__('Dashboard.Start Date')}}</label>
                                        <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror 
                                    </div>
                                    <div class=" col-md-4">
                                        <label for="exampleFormControlInput1">{{__('Dashboard.End Date')}}</label>
                                        <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror 
                                    </div>
                                    <div class="pt-5">
                                        <button class="btn btn-sm mx-3  btn-primary ">{{__('Dashboard.Filter')}}</button>
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive pb-6">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Name')}}</th>
                                <th scope="col" class="sort" data-sort="budget">{{__('Dashboard.Email')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Phone Number')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Job')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Relative relation')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Created At')}}</th>
                                <th scope="col">{{__('Dashboard.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td class="budget">user</td> 
                                <td>user@gmail.com</td>
                                <td class="budget">+201521540890</td>
                                <td>accontant</td>
                                <td>09/08/2000</td>
                                <td>09/08/200</td>
                                <td class="table-actions">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <button class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</button>
                                            <button class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg"></i>Renew</button>
                                            <button class="dropdown-item"><i class="fa-solid fa-pen fa-lg"></i>Edit</button>
                                            <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            <tr>
                                <td class="budget">jaime</td> 
                                <td>jaime077011@gmail.com</td>
                                <td class="budget">+201201218354</td>
                                <td>Web dev            </td>
                                <td>20/10/2023            </td>
                                <td>09/08/2000</td>
                                <td class="table-actions">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <button class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</button>
                                            <button class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg"></i>Renew</button>
                                            <button class="dropdown-item"><i class="fa-solid fa-pen fa-lg"></i>Edit</button>
                                            <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

