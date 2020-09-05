@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-heading"> Add imaage</div><hr>
      
    <form class="form-horizontal" method="POST" action="{{ url('/addimage') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Phone</label>
            <div class="col-md-6">
                <input id="contact" type="contact" class="form-control" name="contact" required>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-md-4 control-label"> Address</label>
            <div class="col-md-6">
           <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
            </div>
        </div>
       
        
    
        <div class="form-group">
            <label for="image" class="col-md-4 control-label">Image</label>
            <div class="col-md-6">
                <input id="image" type="file" class="form-control" name="image" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Submit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
