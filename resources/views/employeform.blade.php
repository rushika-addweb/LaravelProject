@extends('layouts.app')

@section('content')


      <div class="container">
      <div class="jumbotron">
      <div><h2 align="center">Employee Details</h2></div>
      <a href="employeeform">Add image</a>
      <table class="table table-stripped table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Image </th>
            <th scope="col">Edit </th>
          </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
              <th>{{$employee->id}}</th>
              <th>{{$employee->name}}</th>
              <th>{{$employee->address}}</th>
              <th>{{$employee->contact}}</th>
              <th><img src="{{asset('storage/app/public/store/employee/'.$employee->image)}}" alt="Image"></th>
              <th><a href="/editimage/{id}" class="btn btn-primary">Edit</a></th>
              
            </tr>
            @endforeach
          </tbody>
      </table>
      </div>
      </div>

      @endsection
