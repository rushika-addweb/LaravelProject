@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card">
               
                    
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">'Login Page'</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
                
            </div>
            <div><a href="{{ url('/employeeform') }}">Employee List</a></div>
        </div>
    </div>
</div>
@endsection
