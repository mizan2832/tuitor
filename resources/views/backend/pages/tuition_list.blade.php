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
                <div>Tuition List
                    <div class="page-title-subheading">Tuition list of MasterShaheb
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
            <th>Gender</th>
            <th>Class</th>
            <th>Medium</th>
            <th>Subject</th>
            <th>Preferred Tuitor</th>
            <th>Tuitoring Time</th>
            <th>Tuitoring Days</th>
            <th>Total students</th>
            <th>Salary</th>
            <th>Location</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alltuitions as $key=>$tuition)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $tuition->gender }}</td>
            <td>{{ $tuition->class }}</td>
            <td>{{ $tuition->medium }}</td>
            <td>{{ $tuition->subject }}</td>
            <td>{{ $tuition->preferred_tuition }}</td>
            <td>{{ $tuition->tuitoring_time }}</td>
            <td>{{ $tuition->tuitoring_days }}</td>
            <td>{{ $tuition->no_of_students }}</td>
            <td>{{ $tuition->salary }}</td>
            <td>{{ $tuition->location }}</td>
            <td> <a href="{{ route('tuition.edit', $tuition->id) }}">
              <i class="fas fa-edit"></i>
            </a> 
            <a href="{{ route('tuition.index') }}" 
                   onclick="event.preventDefault();
                    document.getElementById(
                      'delete-form-{{$tuition->id}}').submit();">
                 <i class="fas fa-trash-alt"></i>
                </a>
            </td>
            <form id="delete-form-{{$tuition->id}}" 
                  + action="{{route('tuition.destroy', $tuition->id)}}"
                  method="post">
                @csrf @method('DELETE')
            </form>
          </tr>
          @endforeach

          
        </tbody>
      </table>
    </div>
</div>
@endsection
