@extends('layouts.app')
@section('title','Employee')
@section('content')
     <div class="card">
        <div class="card-body">
            <table class="table table-bordered data-table">
                  <thead>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone</th>
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

                {data: 'name', name: 'name', class:'text-center'},

                {data: 'email', name: 'email', class:'text-center'},

                {data: 'phone', name: 'phone', class:'text-center'},


            ]

        });



        });
  </script>
@endsection