@extends('front.master')
@section('content')
    <div class="tui_con container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-md-8">
                <h1 class="my-4">
                    Tuition
                    <small>Job</small>
                </h1>
                <!-- Blog post-->
                @foreach ($jobs as $job)
                    <div class="card mb-2" style="color: black"  >
                    <div class="card-header">Need a {{ $job->gender }} Tuitor for A level Student</div>
                    <div class="card-body" style="line-height:1.6">
                         <div class="row">  
                                <div class="col-sm-4">Category: {{ $job->gender }}</div>
                                <div class="col-sm-4">Class: {{ $job->class }}</div>
                                <div class="col-sm-4">Salary: {{ $job->salary }}</div>
                         </div>
                         <div class="row">  
                                <div class="col-sm-4">Subjects: {{ $job->subject }}</div>
                                <div class="col-sm-4">Duration: {{ $job->tuitoring_days }} </div>
                                <div class="col-sm-4">Duration: {{ $job->location }} </div>
                                
                         </div>
                         <p> Requirements:{{ $job->requirments }}</p>
                      <a href="{{ url('job/details', [$job->id]) }}"> <button class="btn btn-success">Details</button> </a>
                        
                    </div>
                    <div class="card-footer text-muted" style="color: black">
                        Posted on {{ $job->created_at }} 
                    </div>
                </div>    
            @endforeach

                <!-- Blog post-->             
                <!-- Pagination-->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a class="page-link" href="#!">← Older</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">Newer →</a></li>
                </ul>
            </div>
            <!-- Side widgets-->
            <div class="col-md-4">
           
                <!-- Categories widget-->
                <div class="card my-4">
                    <h5 class="card-header">Search Tuition</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                      <option>Select District</option>
                                      <option>Dhaka</option>
                                      <option>Tangail</option>
                                      <option>Chattagong</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                      <option>Select Area</option>
                                      <option>Dhaka</option>
                                      <option>Tangail</option>
                                      <option>Chattagong</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                      <option>Select Medium</option>
                                      <option>Dhaka</option>
                                      <option>Tangail</option>
                                      <option>Chattagong</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                      <option>Select Class</option>
                                      <option>Dhaka</option>
                                      <option>Tangail</option>
                                      <option>Chattagong</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                      <option>Select Subject</option>
                                      <option>Dhaka</option>
                                      <option>Tangail</option>
                                      <option>Chattagong</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                      <option>Select Gender</option>
                                      <option>Dhaka</option>
                                      <option>Tangail</option>
                                      <option>Chattagong</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card my-4">
                    <h5 class="card-header">Category</h5>
                    <div class="card-body">
                       
                            <button type="button" class="btn btn-outline-dark btn-sm">Primary</button>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection