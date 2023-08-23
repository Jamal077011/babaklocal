@extends('frontend.dashboard.layouts.master')
@section('title', 'Create employee')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="card">
<div class="card-header">
    <div class="row align-items-center">
        <div class="col-8">
            <h3 class="mb-0">{{__('Dashboard.Create New File')}}</h3>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('dashboard.employee.show') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
        </div>
    </div>
</div>
<div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.File Name')}}</label>
                <input name="password_confirmation" type="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Start Date')}}</label>
                <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.End Date')}}</label>
                <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.File')}}</label>
                <input name="password_confirmation" type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <button class="btn btn-primary disable ">{{__('Dashboard.Save')}}</button>
    </form>
</div>
</div>
</div>

@endsection