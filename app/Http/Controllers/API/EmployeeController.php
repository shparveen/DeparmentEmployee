<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
  {
    $employees = Employee::all();
    return response()->json($employees);
  }

  /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
  public function store(Request $request)
  {
    $request->validate([
      'first_name' => 'required|max:255',
      'last_name' => 'required'
    ]);

    $newemployee = new Employee([
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'salary' => $request->get('salary'),
      'department_id' => $request->get('department_id')
    ]);

    $newemployee->save();

    return response()->json($newemployee);
  }

  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function show($id)
  {
    $employee = employee::findOrFail($id);
    return response()->json($employee);
  }

 public function search(Request $request)
  {
    $request->validate([
        'name' => 'required|max:100',
      ]);
      $input = $request->get('name');
      if(!$result->isEmpty()){
        $employee = Employee::where('first_name', 'LIKE', '%$input%')->orWhere('last_name', 'LIKE', '%$input%')->get();
        return response()->json($employee);
    }else{
        return response()->json(["messgae"=>"No data Found"]); 
    }
  }
  /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function update(Request $request, $id)
  {
    $employee = employee::findOrFail($id);

    $request->validate([
      'first_name' => 'required|max:255',
      'last_name' => 'required'
    ]);

   
    $employee->first_name = $request->get('first_name');
    $employee->last_name = $request->get('last_name');
    $employee->salary = $request->get('salary');
    $employee->department_id = $request->get('department_id');

    $employee->save();

    return response()->json($employee);
  }

  /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function destroy($id)
  {
    $employee = employee::findOrFail($id);
    $employee->delete();

    return response()->json($employee::all());
  }
}