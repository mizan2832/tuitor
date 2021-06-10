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
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Grid Rows</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        
                     </div>
                </div>
            </div>
     
    </div>
  </div>
@endsection