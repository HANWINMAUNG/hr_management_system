@extends('layouts.app')
@section('title','Employee')
@section('content')
     <div class="">
        <a href="{{ route('employee.create') }}" class="btn btn-theme btn-sm">Create Employee <i class="fas fa-plus-circle"></i></a>
     </div>
     <div class="card mt-2">
        <div class="card-body">
            <table class="table table-bordered data-table">
                  <thead>
                    <th class="text-center">Employee ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Department</th>
                    <th class="text-center">Is Persent?</th>
                  </thead>
            </table>
        </div>
     </div>
@endsection
@section('script')
  <script>
        $(function () {
        var table = $('.data-table').DataTable({

            processing: true,

            serverSide: true,

            ajax: "{{ route('employee.index') }}",

            columns: [
                {data: 'employee_id', name: 'employee_id', class:'text-center'},

                {data: 'name', name: 'name', class:'text-center'},

                {data: 'email', name: 'email', class:'text-center'},

                {data: 'phone', name: 'phone', class:'text-center'},

                {data: 'department_name', name: 'department_name', class:'text-center'},

                {data: 'is_present', name: 'is_present', class:'text-center'},

            ]

        });



        });
  </script>
@endsection