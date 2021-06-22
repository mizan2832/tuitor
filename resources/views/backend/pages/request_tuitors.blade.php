@extends('backend.master')
@push('js_css')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}">
<script src="{{asset('jquery-3.4.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('DataTables/datatables.min.js')}}" type="text/javascript"></script> --}}

<!-- Datatables CSS CDN -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> 
<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Datatables JS CDN -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="fontawesome/css/all.min.css">
@endpush
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger">
                        </i>
                </div>
                <div>Request Tuitor
                    <div class="page-title-subheading">Request tuitor list of MasterShaheb
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <div class="container">
      @if (session('status'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ session('status') }}
          </div>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>S.no</th>
            <th>Student Name</th>
            <th>Location</th>
            <th>Gender</th>
            <th>Subject</th>
            <th>Number</th>
            <th>Salary</th>
            <th>Days</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($requestTui  as $key=>$tuition)           
          <td>{{ $key+1 }}</td>
          <td>{{ $tuition->name }}</td>
          <td>{{ $tuition->location }}</td>
          <td>{{ $tuition->gender }}</td>
          <td>{{ $tuition->subject }}</td>
          <td>{{ $tuition->phoneNumber }}</td>
          <td>{{ $tuition->salary }}</td>
          <td>{{ $tuition->tuitoringDays }}</td>
          <td>{{ $tuition->tutoringType }}</td>
          @endforeach

        </tbody>
      </table>
    </div>

    
   

</div>
@endsection
