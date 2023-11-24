<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            return $this->dataTable();
        }
        return view('employee.index');
    }
    private function dataTable()
    {
        $query = User::with('Department');  
            return DataTables::of($query)
                       ->addColumn('department_name',function($each){
                        return $each->Department ? $each->Department->title : '-';
                       })
                       ->editColumn('is_present',function($each){
                         if($each->is_present == 1){
                            return '<span class="badge text-bg-success">Present</span>';
                         }else{
                            return '<span class="badge text-bg-danger">Leave</span>';
                         };
                       })
                       ->order(function ($user)
                       {
                        $user->orderBy('created_at' , 'desc');
                       })
                       ->addColumn('created_at' , function ($data)
                      {
                        return date('d-M-Y H:i:s' , strtotime($data->created_at));
                      })
                      ->rawColumns(['is_present'])
                       ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::orderBy('title')->get();
        return view('employee.create',['departments' => $departments ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $attributes = $request->validated();
        $attributes['password'] = Hash::make($attributes['password']);
        User::create($attributes);
        return redirect()->route('employee.index')->with('create','Employee is successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
