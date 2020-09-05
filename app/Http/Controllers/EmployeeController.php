<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        return view('employee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $employee = new Employee ();

        $employee->name = $request->input('name');
        $employee->address =$request->input('address');
        $employee->contact =$request->input('contact');

        if($request->hasfile('image')){
        $file =$request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename =time().'.' .$extension;
        $file->move('store/employee',$filename);
        $employee->image =$filename;
        }
        else{
            return $request;
            $employee->image = '';
        }
        $employee->save();

        return view ('employeform')->with('employee',$employee);
    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $employees = Employee::all();
        return view ('employeform')->with('employees',$employees);
    }
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employeeupdateform')->with('employees',$employees);
    }
    public function update()
    {
        $employee = new Employee ();

        $employee->name = $request->input('name');
        $employee->address =$request->input('address');
        $employee->contact =$request->input('contact');

        if($request->hasfile('image')){
        $file =$request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename =time().'.' .$extension;
        $file->move('store/employee',$filename);
        $employee->image =$filename;
        }
        else{
            return $request;
            $employee->image = '';
        }
        $employee->save();

        return view ('employeform')->with('employee',$employee);
    }
}
