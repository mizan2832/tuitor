@extends('front.master')
@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">

@endpush
@section('content')
    <div class="container mt-3">
        <div class="row col-md-12">
            
                <div class="col-md-auto  card mr-3">
                    <label class="my-1 d-flex align-items-center"  style="padding:15px;" for="role"><i style="font-size: 2rem; color: Dodgerblue;" class="fas fa-male mr-2"></i>Gender: {{ $details->gender }} </label>
                </div>
                <div class="col-md-auto  card  mr-3">
                    <label class="my-1 d-flex align-items-center" style="padding:15px;" for="role"><i class="fas fa-users-class"></i>Class: {{ $details->class }} </label>
                </div>
                <div class="col-md-auto  card  mr-3">
                    <label class="my-1 d-flex align-items-center"  style="padding:15px;" for="role"><i class="fas fa-hashtag mr-2"></i>Medium: {{ $details->medium }} </label>
                </div>
                <div class="col-md-auto  card">
                    <label class="my-1 d-flex align-items-center"style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>Preferred Tuitor: {{ $details->preferred_tuition }} </label>
                </div>
                
           
        </div>
        <div class="row col-md-12 mt-2">
            
                <div class="col-md-auto card mr-3">
                    <label class="my-1 d-flex align-items-center" style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>Tuitoring Time: {{ $details->tuitoring_time }} </label>

                </div>
                <div class="col-md-auto card mr-3">
                    <label class="my-1 d-flex align-items-center" style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>Tuitoring Days: {{ $details->tuitoring_days }} </label>

                </div>
                <div class="col-md-auto card mr-3">
                    <label class="my-1 d-flex align-items-center" style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>No. of students: {{ $details->no_of_students }} </label>
                    
                </div>
               
            
        </div>
        <div class="row col-md-12 mt-2">

            <div class="col-md-auto card">
                <label class="my-1 d-flex align-items-center" style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>Salary: {{ $details->salary }} </label>
                
            </div>
            
                 <div class="col-md-auto  card mr-3">
                    <label class="my-1 d-flex align-items-center"style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>Location: {{ $details->location }} </label>
                </div>

                
                <div class="col-md-auto card mr-3">
                    <label class="my-1 d-flex align-items-center" style="padding:15px;" for="role"><i class="fas fa-tag mr-2"></i>Requirments: {{ $details->requirments }} </label>

                </div>
                
            
        </div>
        <div class="row mt-2">
            <div class="col-md-6 offset-md-3 justify-content-center">
               <a href="" class="btn btn-success">Apply</a> 
            </div>
          </div>
        
    </div>
@endsection