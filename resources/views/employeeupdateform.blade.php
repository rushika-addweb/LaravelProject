@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-heading"> Add image</div><hr>
      
    <form class="form-horizontal" method="POST" action="/updateemployee/{{$employees->id}}" enctype="multipart/form-data">
    
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <input type="hidden" name="id"  value="{{$employees->id}}">
        <div class="form-group>
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{$employees->name }}" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="contact" class="col-md-4 control-label">Phone</label>
            <div class="col-md-6">
                <input id="contact" type="contact" class="form-control" name="contact" value="{{$employees->contact }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-md-4 control-label"> Address</label>
            <div class="col-md-6">
           <input id="address" type="text" class="form-control" name="address" value="{{$employees->address }}"  required>
            </div>
        </div>
       
        
    
        <div class="form-group">
            <label for="image" class="col-md-4 control-label">Image</label>
            <div class="col-md-6">
                <input id="image" type="file" class="form-control" name="image" value="{{$employees->image }}" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Update record
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
