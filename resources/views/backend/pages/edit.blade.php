@extends('backend.master')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger">
                        </i>
                </div>
                <div>Edit Tuition
                    <div class="page-title-subheading">Fill up all the input fields under blow carefully.
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form 
             action="{{ route('tuition.update', $tui->id) }}"  method="POST" id="needs-validation"   >
             {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Select Student Gender</label>
                        <select name="gender" class="form-control" value="{{ $tui->gender }}" id="validationCustom01" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Class</label>
                        <input type="text" class="form-control" id="validationCustom02"  value="{{ $tui->class }}" placeholder="Class of the student" name="class" required>
                        
                    </div>
                    <div class="col-md-4 mb-3">
                       <label for="validationCustom03">Select Student Medium</label>
                        <select name="medium" class="form-control" value="{{ $tui->medium }}" id="validationCustom03" required>
                            <option value="0">Bangla Medium</option>
                            <option value="1">English Medium</option>
                            <option value="2">English Version</option>
                            <option value="3">Arbi</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">Subject</label>
                        <input type="text" class="form-control"  value="{{ $tui->subject }}" id="validationCustom04" name="subject" placeholder="Subject" required>
                        <div class="invalid-feedback">
                          
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Preferred Tuitor</label>
                        <input type="text" class="form-control" id="validationCustom05"  value="{{ $tui->preferred_tuition }}" placeholder="Preferred Tuition" name="preferred_tuition" required>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom06">Tuitoring Time</label>
                        <input type="text" class="form-control" name="tuitoring_time"  value="{{ $tui->tuitoring_time }}" id="validationCustom06" placeholder="Tuitoring Time" required>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom07">Number of Days</label>
                        <input type="number" class="form-control" name="number_of_days" value="{{ $tui->tuitoring_days }}" id="validationCustom07" placeholder="Number of Days" required>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom08">Number of Students</label>
                        <input type="number" class="form-control" name="number_of_students" value="{{ $tui->no_of_students }}" id="validationCustom08" placeholder="Number of students" required>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom09">Salary</label>
                        <input type="text" class="form-control" name="salary" value="{{ $tui->salary }}" id="validationCustom09" placeholder="Salary of this tuition" required>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom10">Location</label>
                        <input type="text" class="form-control" name="location" value="{{ $tui->location }}"id="validationCustom10" placeholder="Location of this tuition" required>

                    </div>
                </div>
               
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
        </div>
    </div>
    
</div>
@endsection