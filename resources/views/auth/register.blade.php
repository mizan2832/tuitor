@extends('front.master')
@push('css')
<link rel="stylesheet" href="css/registration.css">
<script src="js/regis.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endpush
@section('content')
<!-- MultiStep Form -->
<div class="container">
    <form id="regForm" action="/action_page.php">
        
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <h1>Register As a Tutor</h1>
          <p>Full Name:</p>
          <input placeholder="Enter your full name"  name="user_name">
            <p>Select Gender</p>           
             <div class="btn-group">   
                 <button type="button"  value="m"  class="btn btn-primary male"><i style="display: none;" class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Male</button>  
                 <button type="button"  value="f"  class="btn btn-primary male"><span><i style="display: none;" class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Female</button>
            </div>
          <p>Phone Number:</p>
          <input placeholder="Enter your phone number"  name="phone_number">
          <p>Email Address:</p>
          <input placeholder="Enter your Email" oninput="this.className = ''" name="email">
          <p>Password:</p>
          <input placeholder="Enter your password" oninput="this.className = ''" name="password">
      
          <p>Password Confirmation:</p>
          <input placeholder="Retype your password"  name="password">
          <h1>Personal Information</h1>
          <div class="row ">
              <div class="col-md-6">
                  <p>Your Current Institution:</p>
                  <input placeholder="Your current institution"  name="your institution">
              </div>
              <div class="col-md-6">
                  <p>Name of the Subject you are studding on:</p>
                  <input placeholder="Enter your subject" name="subject">
              </div>
          </div>

          <div class="row ">
              <div class="col-md-6">
                  <p>Your Highest Qualification:</p>
                  <input placeholder="Enter your qualification" name="qualification">
              </div>
              <div class="col-md-6">
                  <p>Background Medium:</p>
                  <div class="form-group">
                    <select class="form-control" id="sel1" name="medium">
                      <option>Bangla Medium</option>
                      <option>English Medium</option>
                    </select>
                  </div>

                </div>
        </div>

      <label for="pwd">Your SSC/O-level information:</label> <br>
      <div class="row ssc">
        <div class="col-sm-3"><input type="text" name="ssc_year"></div>
        <div class="col-sm-3"><input type="text" name="ssc_institution"></div>
        <div class="col-sm-3"><input type="text" name="ssc_group"></div>
        <div class="col-sm-3"><input type="text" name="ssc_gpa"></div>
      </div>
      <label for="pwd">Your HSC/A-level information:</label><br>
      <div class="row hsc">
        <div class="col-sm-3"><input type="text" name="hsc_year"></div>
        <div class="col-sm-3"><input type="text" name="hsc_institution"></div>
        <div class="col-sm-3"><input type="text" name="hsc_group"></div>
        <div class="col-sm-3"><input type="text" name="hsc_gpa"></div>
      </div>
      <label for="pwd">Your Honours information:</label><br>
      <div class="row honours">
        <div class="col-sm-3"><input type="text" name="honours_year"></div>
        <div class="col-sm-3"><input type="text" name="honours_institution"></div>
        <div class="col-sm-3"><input type="text" name="honours_subject"></div>
        <div class="col-sm-3"><input type="text" name="honours_gpa"></div>
      </div>
      <label for="pwd">About Yourself:</label>
      <div class="row">
        <div class="col-sm-12">
          <textarea name="about_yourself" class="form-control" title="Write about yourself"></textarea>
       </div>
      </div>

    <h1>Tuition information</h1>
    <div class="row">
        <div class="col-md-6">
            <p>Districts:</p>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Your District:</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
          <p>Select your preferred area:</p>
          <div class="form-group">
            <select class="form-control" id="sel1">
              <option>Select Your District:</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>

        </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <p>Select Medium:</p>
        <div class="form-group">
          <select class="form-control" id="sel1">
            <option>Bangla Medium</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
    </div>
    <div class="col-md-6">
      <p> Preferred Classes:</p>
      <div class="form-group">
        <select class="form-control" id="sel1">
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>

    </div>
</div>
<div class="row">
  <div class="col-md-6">
      <p>Preferred Subjects:</p>
      <div class="form-group">
        <select class="form-control" id="sel1">
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
  </div>
  <div class="col-md-6">
    <p> Day per Week:</p>
    <div class="form-group">
      <select class="form-control" id="sel1">
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>

  </div>
</div>
<div class="row">
  <div class="col-md-6">
      <p>Timing Shift:</p>
      <div class="form-group">
        <select class="form-control" id="sel1">
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
  </div>
  <div class="col-md-6">
    <p> Expected Salary:</p>
    <div class="form-group">
      <select class="form-control" id="sel1">
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>

  </div>
</div>
<div class="row">
  <div class="col-md-12">
      <p>Preferred Tuitoring Style:</p>
      <div class="form-group">
        <select class="form-control" id="sel1">
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
  </div>
  
</div>
<div class="row">
  <div class="col-md-12">
      <p>Experience:</p>
      <textarea name="" title="Your Experience" class="form-control"></textarea>
      
  </div>
  
</div>


        </div>
        <div class="tab">
      
          
        </div>
        <div class="tab">
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
function male(){
 
}
    </script>
@endpush            