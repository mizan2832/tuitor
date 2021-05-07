@extends('front.master')
@push('css')
<link rel="stylesheet" href="css/registration.css">
<script src="js/regis.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
>


@endpush
@section('content')
<!-- MultiStep Form -->
<div class="container">
    <form id="regForm" action="/action_page.php">
        
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <h1>Register As a Tutor</h1>
          <p>Full Name:</p>
          <input placeholder="Enter your full name" oninput="this.className = ''" name="fname">
            <p>Select Gender</p>           
             <div class="btn-group">   
                 <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Male</button>
            </div>
            <div class="btn-group">   
                 <button type="button" class="btn btn-primary"><span><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Female</button>
            </div>
          <p>Phone Number:</p>
          <input placeholder="Enter your phone number" oninput="this.className = ''" name="fnumber">
          <p>Email Address:</p>
          <input placeholder="Enter your Email" oninput="this.className = ''" name="femail">
          <p>Password:</p>
          <input placeholder="Enter your password" oninput="this.className = ''" name="femail">
          <p>Password Confirmation:</p>
          <input placeholder="Retype your password" oninput="this.className = ''" name="femail">

        </div>
        <div class="tab">
          <h1>Personal Information</h1>
          <div class="row col-md-12">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pwd">Your Current Institution:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pwd">Name of the Subject you are studding on:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
              </div>
          </div>

          <div class="row col-md-12">
            <div class="col-md-6">
              <div class="form-group">
                <label for="pwd">Your Highest Qualification:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pwd">Background Medium:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
            </div>
        </div>

        <div class="row col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="pwd">Your Current Institution:</label>
              <textarea name="institution" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="pwd">Name of the Subject you are studding on:</label>
              <textarea name="subject" class="form-control" id=""></textarea>

            </div>
          </div>
      </div>
      <div class="row col-md-12">
        <label for="pwd">Your SSC/O-level information:</label> <br>
        <div class="col-md-3"><input type="Year"></div>
        <div class="col-md-3"><input type="Institute"></div>
        <div class="col-md-3"><input type="Group"></div>
        <div class="col-md-3"><input type="GPA"></div>
      </div>
      <div class="row col-md-12">
        <label for="pwd">Your HSC/A-level information:</label><br>
        <div class="col-md-3"><input type="Year"></div>
        <div class="col-md-3"><input type="Institute"></div>
        <div class="col-md-3"><input type="Group"></div>
        <div class="col-md-3"><input type="GPA"></div>
      </div>
      <div class="row col-md-12">
        <label for="pwd">Your Honours information:</label><br>
        <div class="col-md-3"><input type="Year"></div>
        <div class="col-md-3"><input type="Institute"></div>
        <div class="col-md-3"><input type="Group"></div>
        <div class="col-md-3"><input type="GPA"></div>
      </div>
      <div class="col-md-12">
        <label for="pwd">Your Honours information:</label>
         <textarea name="about_yourself" class="form-control" title="Write about yourself"></textarea>
      </div>
          
          
        </div>
        <div class="tab">Birthday:
          <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
          <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
          <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Login Info:
          <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
          <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>
</div>
    
@endsection

@push('js')
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
    </script>
@endpush            