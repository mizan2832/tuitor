@extends('front.master')
@section('content')
    <div class="container">
        <div class="row col-sm-12 col-md-12 mt-2 justify-content-md-center">
            <div class="col-sm-auto ">
                <img width="150px" height="150px" src="{{ asset('images/nijerchobi/') }}/{{$tuitorDetails->profile}}" alt="">
            </div>
            <div class="col-sm-auto">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $tuitorDetails->name }}</li>
                    <li class="list-group-item"> Email:{{ $tuitorDetails->email }}</li>
                    <li class="list-group-item">District:{{ $tuitorDetails->district }}</li>
                  </ul>
            </div>
            <div class="col-sm-auto">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Current institution:{{ $tuitorDetails->institution }}</li>
                    <li class="list-group-item"> Subject:{{ $tuitorDetails->subject }}</li>
                    <li class="list-group-item"> Medium:{{ $tuitorDetails->s_medium }}</li>
                  </ul>
            </div>
            <div class="col-sm-auto">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Minumum Expected Salary:{{ $tuitorDetails->salary }}</li>
                    <li class="list-group-item">{{ $tuitorDetails->tuitoring_days }} days in a week.</li>
                    <li class="list-group-item"> Tuitoring Time:{{ $tuitorDetails->shift }}</li>
                  </ul>
            </div>
        </div>
        <h3 style="text-align: center;">Education Background:</h3>

        <div class="row  col-sm-12 col-md-12 justify-content-md-center">
          <div class="table-responsive">
            <table class=" edu-table table table-bordered table-hover">
                <thead class="table-header">
                  <tr>
                    <th class="fit">Degree</th>
                    <th class="fit">Group/Subject</th>
                    <th class="fit">institution</th>
                    <th class="fit">Passing Year</th>
                    <th class="fit">GPA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="fit">SSC</td>
                    <td class="fit">{{ $tuitorDetails->ssc_group }}</td>
                    <td class="fit">{{ $tuitorDetails->ssc_institution }}</td>
                    <td class="fit">{{ $tuitorDetails->ssc_year }}</td>
                    <td class="fit">{{ $tuitorDetails->ssc_gpa }}</td>
                  </tr>
                  <tr>
                    <td class="fit">HSC</td>
                    <td class="fit">{{ $tuitorDetails->hsc_group }}</td>
                    <td class="fit">{{ $tuitorDetails->hsc_institution }}</td>
                    <td class="fit">{{ $tuitorDetails->hsc_year }}</td>
                    <td class="fit">{{ $tuitorDetails->hsc_gpa }}</td>
                  </tr>
                  <tr>
                    <td class="fit">Honours</td>
                    <td class="fit">{{ $tuitorDetails->honours_subject }}</td>
                    <td class="fit">{{ $tuitorDetails->honours_institution }}</td>
                    <td class="fit">{{ $tuitorDetails->honours_year }}</td>
                    <td class="fit">{{ $tuitorDetails->honours_gpa }}</td>
                  </tr>
                 
                </tbody>
              </table>
          </div>
        </div>
        <p style="border: 2px solid black;padding: 10px;text-align: center;
        font-size: xx-large;">Experience</p>
        <div class="row">
          <p style="margin-left:2%;">{{ $tuitorDetails->experience }}</p>
        </div>
        <div class="row col-sm-12 col-md-12 justify-content-md-center">
          <div class="col-sm-6 col-md-6">
            <img width="100%" height="50%" src="{{ asset('images/nijerchobi/') }}/{{$tuitorDetails->studentId}}" alt="">
            <div class="studentcard">
              <h4>Student Card</h4>
            </div>

          </div>
          <div class="col-sm-6 col-md-6">
            <img width="100%" height="50%" src="{{ asset('images/nijerchobi/') }}/{{$tuitorDetails->nationalId}}" alt="">
            <div class="nationalcard">
              <h4>National Id</h4>
            </div>
          </div>
        </div>

    </div>
@endsection