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

    
    <table id='tuitionTable' width='100%' border="1" style='border-collapse: collapse;'>
        <thead>
          <tr>
            <td>S.no</td>
            <td>Gender</td>
            <td>Class</td>
            <td>Medium</td>
            <td>Subject</td>
            <td>Preferred Tuitor</td>
            <td>Tuitoring Time</td>
            <td>Tuitoring Days</td>
            <td>Total students</td>
            <td>Salary</td>
            <td>Location</td>
          </tr>
        </thead>
      </table>

</div>
@endsection
@push('script')
<script type="text/javascript">
    $(document).ready(function(){

      // DataTable
      $('#tuitionTable').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{route('all_tuition')}}",
         columns: [
            { data: 'id' },
            { data: 'gender' },
            { data: 'class' },
            { data: 'medium' },
            { data: 'subject' },
            { data: 'preferred_tuition' },
            { data: 'tuitoring_time' },
            { data: 'tuitoring_days' },
            { data: 'no_of_students' },
            { data: 'salary' },
            { data: 'location' },
         ]
      });

    });
    </script>
@endpush