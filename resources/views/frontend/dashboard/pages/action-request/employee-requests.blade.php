@extends('frontend.dashboard.layouts.master')
@section('title', 'Employee Requests')

@section('content')
<div class="container-fluid">
    <div class="container-fluid my-5 rounded shadow-lg bg-white py-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Add New Request</h3>
                </div>

            </div>
        </div>
        <div class="card-body">
            {{-- <form action="" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="">
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">Request Name</label>
                        <input name="name" type="name" class="form-control" required id="exampleFormControlInput1" placeholder="">
                        @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div> --}}
                <div class=" ">
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">Choose a Request</label>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">choose</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            @foreach ($employeerequests as $employeerequest)
                            <a href="{{ route('employee_requests.show', $employeerequest->id) }}" class="dropdown-item">{{ $employeerequest->name }}</a></option>
                            @endforeach

                        </select>
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                    </div>
                    </div>

                {{-- <div class=" ">
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">Choose a Request</label>
                        <select class="form-control form-control-lg" name="gender"  value="{{ old('gender') }}"  autofocus >
                            @foreach ($employeerequests as $employeerequest)
                            <option value="{{ $employeerequest->id }}">{{ $employeerequest->name }}</option>
                            @endforeach
                        </select>
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                    </div> --}}
                    {{-- <div class=" ">
                        <div class="form-group ">
                            <label for="exampleFormControlInput1">Choose an employee</label>
                            <select class="form-control form-control-lg" name="gender"  value="{{ old('gender') }}"  autofocus >
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->en_name }}</option>
                                @endforeach
                            </select>
                            @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror <br>
                        </div>
                        </div> --}}
                    {{-- <div class="">
                        <div class="form-group ">
                            <h2 >{{__('Dashboard.Add your notes')}}</h2>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name=note></textarea>                        
                            @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror <br>
                        </div>
                    </div>

                <button class="btn btn-primary disable  ">{{__('Dashboard.Next')}}</button>
            </form> --}}
        </div>
</div>
    <div class="container-fluid my-5 rounded shadow-lg bg-white py-5">
        <div class="row mb-4">
            <div class=" col-md-6">
                <h1 class="">
                {{__('Dashboard.Employee Requests')}}
                </h1>
            </div>
            <div class="col-md-6">
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
        <div class="">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name"></th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.File Name')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.File Number')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Order Date')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Status')}}</th>
                        <th scope="col" class="sort" data-sort="name"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                        <td>Fileone.pdf</td>
                        <td>121290192990</td>
                        <td>20/10/1990</td>
                        <td>continue</td>
                        <td>
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
                        <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                        <td>Fileno_two.pdf</td>
                        <td>121290192990</td>
                        <td>20/10/1990</td>
                        <td>continue</td>
                        <td>
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
                        <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                        <td>hellohowareyoutoday.pdf</td>
                        <td>121290192990</td>
                        <td>20/10/1990</td>
                        <td>continue</td>
                        <td>
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
@endsection