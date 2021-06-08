@extends('front.master')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="hero-content container ">
        <div class="row">
                <div class="col-lg-12 col-md-10 col-md-offset-1  text-center">
                <h1>Find a tutor in your area today!    </h1>      
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  text-center">
                <h3>Master.com is a faster, easier way to find local and online tutoring services. We have <em>124,552</em> of the best tutors in <em>64</em> districts. Contact a professional tutor for FREE to start in-person or online tutoring!</h3>
            </div>
        </div>
        <div class="row">
            <form id="search_tuitor">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Enter Your Location">
                  <input type="text" class="form-control" placeholder="Your District">
                  <select class="form-control" name="tuitor_type" id="tuitoring_type">
                         <option value="">Online</option>
                        <option value="">Person</option>
                  </select>
                </div>
              </form>
        </div>
    </div>
  </div>
@endsection