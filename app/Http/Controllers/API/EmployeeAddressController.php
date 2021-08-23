<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeAddress;
use Illuminate\Http\Request;

class EmployeeAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeAddresses = EmployeeAddress::all();
        return response()->json($employeeAddresses);
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
            'address' => 'required|max:255',
            'pin_code' => 'required',
            'employee_id'=>'required'
          ]);
      
          $newemployeeAddress = new EmployeeAddress([
            'address' => $request->get('address'),
            'pin_code' => $request->get('pin_code'),
            'employee_id' => $request->get('employee_id')
          ]);
      
          $newemployeeAddress->save();
      
          return response()->json($newemployeeAddress);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeeAddress = EmployeeAddress::findOrFail($id);
        return response()->json($employeeAddress);
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
        $employeeAddress = EmployeeAddress::findOrFail($id);

        $request->validate([
          'address' => 'required|max:255',
          'pin_code' => 'required',
          'employee_id'=>'required'
        ]);
    
       
        $employeeAddress->address = $request->get('address');
        $employeeAddress->pincode = $request->get('pin_code');
        $employeeAddress->employee_id = $request->get('employee_id');
    
        $employeeAddress->save();
    
        return response()->json($employeeAddress);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeAddress = EmployeeAddress::findOrFail($id);
        $employeeAddress->delete();
    
        return response()->json(EmployeeAddress::all());
    }
}
