@extends('frontend.dashboard.layouts.master')
@section('title', 'Employee')

@section('content')
<div class="container">
    <div class="container my-5 rounded shadow-lg bg-white py-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                {{__('Dashboard.Employee Information')}}
                </h1>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('employee.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <span>{{__('Dashboard.Employee Name')}}</span>
                <h3>{{ $employer->en_name }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Gender')}}</span>
                <h3>{{ $employer->gender }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Job')}}</span>
                <h3>{{ $employer->job_title_id }}</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <span>{{__('Dashboard.Email')}}</span>
                <h3>{{ $employer->email }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Phone Number')}}</span>
                <h3>{{ $employer->phone }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Nationallity')}}</span>
                <h3>{{ $employer->nationality_id }}</h3>
            </div>
        </div>
    </div>
    <div class="container my-5 rounded shadow-lg bg-white py-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                {{__('Dashboard.Employee Files')}}
                </h1>
            </div>
            <div class="col-md-6 text-right">
                {{-- <a href="{{ route('dashboard.employee.createfile')}}" class="btn btn-success"><b><i class="fas fa-plus"></i>{{__('Dashboard.Add New File')}}</b></a> --}}
                {{-- <a href="{{ route('dashboard.employee.sponsored-create')}}" class="btn btn-success"><b><i class="fas fa-plus"></i>{{__('Dashboard.Add new Sponsored')}}</b></a> --}}
            </div>
        </div>
        <div class="row mt-5">
            <div class="table-responsive pb-6">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col" class="sort" data-sort="name"></th>
                        <th scope="col" class="sort" data-sort="budget">{{__('Dashboard.File Name')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Start Date')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.End Date')}}</th>
                        <th scope="col">{{__('Dashboard.Action')}}</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td></td>
                            <td class="budget">+2015215408</td>
                            <td>accontant</td>
                            <td>20/10/1100</td>
                            <td class="table-actions">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}} </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        {{-- <a href="{{route('dashboard.employee.show')}}" class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</a> --}}
                                        {{-- <a href="{{route('dashboard.employee.sponsored-index')}}" class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>View Sponserd</a> --}}
                                        <button class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg"></i>Renew</button>
                                        <button class="dropdown-item"><i class="fa-solid fa-pen fa-lg"></i>Edit</button>
                                        <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td>jaime077011@gmail.com</td>
                            <td class="budget">+201201218354</td>
                            <td>20/10/2023</td>
                            <td class="table-actions">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}}</button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        {{-- <a href="{{route('dashboard.employee.show')}}" class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</a> --}}
                                        {{-- <a href="{{route('dashboard.employee.sponsored-index')}}" class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>View Sponserd</a> --}}
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
@endsection