@extends('frontend.dashboard.layouts.master')
@section('title', 'Edit sponsore File')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="card">
<div class="card-header">
    <div class="row align-items-center">
        <div class="col-8">
            <h3 class="mb-0">{{__('Dashboard.Edit')}}</h3>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('sponsore.show', $sponsore->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
        </div>
    </div>
</div>
<div class="card-body">
    <form action="{{route('sponsorefile.update', ['id' => $file->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.File Name')}}</label>
                <input name="name" type="name" class="form-control" id="exampleFormControlInput1" value="{{$file->name}}" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Start Date')}}</label>
                <input name="start_date"  class="form-control" id="start_date" value="{{$file->start_date}}"  placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.End Date')}}</label>
                <input name="end_date"  class="form-control" id="end_date" value="{{$file->end_date}}" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.File')}}</label>
                <input name="file" type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
                <img src="{{ asset($file->filename) }}">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
        <button class="btn btn-primary  ">{{__('Dashboard.Save')}}</button>
    </form>
</div>
</div>
</div>
<script>
    $('#start_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
    });
    $('#end_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
    });
</script>
@endsection