@extends('layouts.app')
@section('title','Employee Create')
@section('header')
     <link href=" https://cdn.jsdelivr.net/npm/mdbootstrap5-pro@1.0.0/css/mdb.min.css " rel="stylesheet">
@endsection
@section('content')
     <div class="card">
        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="post" id="create">
                @csrf
                <div class="form-outline  mt-4 mb-4" style="margin-bottom:20px;">  
                    <input id="" type="text" class="form-control" name="employee_id">
                    <label class="form-label" for="form2Example1">Employee ID</label>
                </div>
                <div class="form-outline  mt-4 mb-4">  
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  autofocus>
                    <label class="form-label" for="form2Example1">Name</label>
                </div>
                <div class="form-outline mb-4">  
                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required  autofocus>
                    <label class="form-label" for="form2Example1">Phone</label>
                </div>
                <div class="form-outline mb-4">  
                    <input id="phone" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required  autofocus>
                    <label class="form-label" for="form2Example1">Password</label>
                </div>
                <div class="form-outline mb-4">  
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>
                    <label class="form-label" for="form2Example1">Email</label>
                </div>
                <div class="form-outline   mb-4">  
                    <input id="" type="text" class="form-control" name="nrc_number">
                    <label class="form-label" for="form2Example1">NRC NUmber</label>
                </div>
                <div class="form-outline  mb-4" >  
                    <input id="birthday" type="text" class="form-control" name="birthday">
                    <label class="form-label" for="form2Example1">Birthday</label>
                </div>
                <div class="form-outline  mb-4" >  
                    <input id="date_of_join" type="text" class="form-control" name="date_of_join">
                    <label class="form-label" for="form2Example1">Date Of Join</label>
                </div>
                <div class="mb-4"> 
                    <select name="gender" class="select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label class="form-label select-label">Gender</label> 
                </div>
                <div class="mb-4"> 
                    <select name="is_present" class="select">
                        <option value="1">Present</option>
                        <option value="0">Leave</option>
                    </select>
                    <label class="form-label select-label">Is Present</label> 
                </div>
                <div class="mb-4"> 
                    <select name="department_id" class="select">
                       @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                       @endforeach 
                    </select>
                    <label class="form-label select-label">Department</label> 
                </div>
                <div class="form-outline">
                    <textarea class="form-control" id="textAreaExample" rows="4" name="address"></textarea>
                    <label class="form-label" for="textAreaExample">Address</label>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-theme btn-sm btn-block">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
     </div>
@endsection
@section('script')
{!! JsValidator::formRequest('App\Http\Requests\EmployeeRequest' , '#create') !!}
  <script src=" https://cdn.jsdelivr.net/npm/mdbootstrap5-pro@1.0.0/js/mdb.min.js "></script>
  <script>
        $(document).ready(function () {
        //   $('.mdb-select').materialSelect();
          $('#birthday').daterangepicker({
            "autoApply": true,
            "showDropdowns":true,
            "maxDate":moment(),
            //  "autoUpdateInput": false,
            "singleDatePicker": true,
            "locale": {
                   "format": "YYYY-MM-DD",
            },
          }); 
          $('#date_of_join').daterangepicker({
            "autoApply": true,
            "showDropdowns":true,
            "maxDate":moment(),
            // "autoUpdateInput": true,
            "singleDatePicker": true,
            "locale": {
                   "format": "YYYY-MM-DD",
            },
          }); 
        });
  </script>
@endsection