        @extends('front.master')
@section('meta')<meta name="csrf-token" content="{{ csrf_token() }}"> @endsection
@section('css')     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="hero-content container ">
        <div class="row">
                <div class="col-lg-12 col-md-10">
                <h1 id="tuiTit" >Request for a tutor in your area today!    </h1>       
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 descTuitor text-center">
                <h3>Master.com is a faster, easier way to find local and online tutoring services. We have <em>124,552</em> of the best tutors in <em>64</em> districts. Contact a professional tutor for FREE to start in-person or online tutoring!</h3>
            </div>
        </div>
        @if (session('status'))
          <div id="successMessage">
              <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{ session('status') }}
                </div>
            </div>
        @endif
           <div id="tuitor_form">
                <h3>Request a tuitor by filling out the form.</h3>
            
                        <form action="{{ route('request.store') }}" method="POST" id="postForm" name="myForm">
                            {{ csrf_field() }}

                            <input type="hidden" id="id_hidden" name="id" />
                            <div class="row col-md-12" style="margin-left: -10px;">
                                <div class="col-md-6">
                                    <div class="form-group"><label for="studentName" class="">Student Name:</label><input name="name" id="studentName" placeholder="Enter the student name" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label for=" location" class="">Location</label><input name="location" id=" location" placeholder="Enter your location" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label for="gender" style="margin-left:15px;" class="">Gender:</label>
                            <div class="form-row" style="margin-left:13px;">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><input type="radio" id="male" name="gender" value="ma">   Male</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <input type="radio" id="fe" name="gender" value="female">   Female
                                </div>
                            </div>
                            <label for="subject" class="" style="margin-left:5px;">Subject for tuitoring:</label>
                            <div class="col-md-6">
                                <select name="subject" id="subject">
                                    <option value="m">Math</option>
                                    <option value="e">English</option>
                                    <option value="p">Physics</option>
                                    <option value="c">Chemistry</option>
                                </select>
                            </div>     
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="phoneNumber" class="">Phone Number:</label><input name="phoneNumber" id="phoneNumber" placeholder="Enter the phone number" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for=" location" class="">How much salary you want to give? </label><input name="salary" id=" salary" placeholder="Enter your salary" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="tuitoringDays" class="">Tuitoring days in a week:</label><input name="tuitoringDays" id="tuitoringDays" placeholder="Number of days in a week" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="tutoringType" class="">Type of tuitoring? </label> <br>
                                    <select name="tutoringType" id="tutoringType">
                                            <option value="offline">Offline</option>
                                            <option value="online">Online</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                           
                               <input type="submit" id="createBtn" class="button btn-success btn" value="submit">
                           
                    </div>
     
             </div>
  </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                    $('#successMessage').fadeOut('fast');
                }, 30000);
        });
    </script>
@endpush

    