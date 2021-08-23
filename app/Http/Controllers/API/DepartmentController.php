<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
  {
    $departments = Department::all();
    return response()->json($departments);
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
      'name' => 'required|max:255',
      'description' => 'required'
    ]);

    $newdepartment = new department([
      'name' => $request->get('name'),
      'description' => $request->get('description')
    ]);

    $newdepartment->save();

    return response()->json($newdepartment);
  }

  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function show($id)
  {
    $department = department::findOrFail($id);
    return response()->json($department);
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
    $department = department::findOrFail($id);

    $request->validate([
      'name' => 'required|max:255',
      'description' => 'required'
    ]);

    $department->name = $request->get('name');
    $department->description = $request->get('description');

    $department->save();

    return response()->json($department);
  }

  /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function destroy($id)
  {
    $department = Department::findOrFail($id);
    $department->delete();

    return response()->json($department::all());
  }
}