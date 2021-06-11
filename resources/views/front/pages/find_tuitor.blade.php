@extends('front.master')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="hero-content container ">
        <div class="row">
                <div class="col-lg-12 col-md-10">
                <h1 style="margin-top: -50px; text-align:center; color:red;">Request for a tutor in your area today!    </h1>       
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  text-center">
                <h3>Master.com is a faster, easier way to find local and online tutoring services. We have <em>124,552</em> of the best tutors in <em>64</em> districts. Contact a professional tutor for FREE to start in-person or online tutoring!</h3>
            </div>
        </div>
           <div id="tuitor_form">
                <h3 style="color: blue; border-bottom:2px solid black; text-align:center;padding:3px;">Request a tuitor by filling out the form.</h3>
            
                        <form class="">
                            <div class="row col-md-12" style="margin-left: -10px;">
                                <div class="col-md-6">
                                    <div class="form-group"><label for="studentName" class="">Student Name:</label><input name="studentName" id="" placeholder="Enter the student name" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label for=" location" class="">Location</label><input name="location" id=" location" placeholder="Enter your location" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label for="gender" style="margin-left:15px;" class="">Gender:</label>
                            <div class="form-row" style="margin-left:13px;">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><input type="radio" id="male" name="gender" value="male">   Male</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <input type="radio" id="female" name="gender" value="female">   Female
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
                                    <div class="position-relative form-group"><label for="phoneNumber" class="">Phone Number:</label><input name="phoneNumber" id="" placeholder="Enter the phone number" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for=" location" class="">How much salary you want to give? </label><input name="salary" id=" salary" placeholder="Enter your salary" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="tuitoringDays" class="">Tuitoring days in a week:</label><input name="tuitoringDays" id="" placeholder="Number of days in a week" type="text" class="form-control"></div>
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
                           
                               <input type="button"  class="button btn-success btn" value="submit">
                           
                    </div>
     
             </div>
  </div>
@endsection