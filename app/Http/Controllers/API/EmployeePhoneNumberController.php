<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeePhoneNumber;
use Illuminate\Http\Request;

class EmployeePhoneNumberController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
  {
    $employeePhoneNumbers = EmployeePhoneNumber::all();
    return response()->json($employeePhoneNumbers);
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
        'employee_id' => 'required',
        'phone_number' => 'required'
      ]);
  

    $newemployeePhoneNumber = new EmployeePhoneNumber([
      'employee_id' => $request->get('employee_id'),
      'phone_number' => $request->get('phone_number'),
     
    ]);

    $newemployeePhoneNumber->save();

    return response()->json($newemployeePhoneNumber);
  }

  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function show($id)
  {
    $employeePhoneNumber = employeePhoneNumber::findOrFail($id);
    return response()->json($employeePhoneNumber);
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
    $employeePhoneNumber = employeePhoneNumber::findOrFail($id);

    $request->validate([
      'employee_id' => 'required',
      'phone_number' => 'required'
    ]);

   
    $employeePhoneNumber->phone_number = $request->get('phone_number');
    $employeePhoneNumber->employee_id = $request->get('department_id');

    $employeePhoneNumber->save();

    return response()->json($employeePhoneNumber);
  }

  /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function destroy($id)
  {
    $employeePhoneNumber = employeePhoneNumber::findOrFail($id);
    $employeePhoneNumber->delete();

    return response()->json($employeePhoneNumber::all());
  }
}