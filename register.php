<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"><img src="img/reg.jpg" class="img img-responsive" style="object-size:fit;"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Bio Data!</h1>
              </div>
              <form action="includes/reg.php" method="post" class="user">
                <!-- First -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="fname" class="form-control" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="surname" class="form-control" id="exampleLastName" placeholder="Surname">
                  </div>
                </div>
                <!-- Second -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="mname" class="form-control" id="exampleFirstName" placeholder="Middle Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="tel" name="tel_no" class="form-control" id="exampleLastName" placeholder="Phone Number">
                  </div>
                </div>

                <!-- Third -->
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="date" name="d_o_b" class="form-control " id="exampleFirstName" placeholder="Date Of Birth">
                  </div>
                  <div class="col-sm-8">
                    <input type="text" name="mail" class="form-control" id="exampleLastName" placeholder="E-mail">
                  </div>
                </div>

                <!-- Fourth -->
                <div class="form-group row">
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <!-- <input type="text"  id="" placeholder="Sex"> -->
                    <select name="gender" class="form-control" id="exampleFirstName">
                      <option disabled selected="selected" value="-select-">Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="state_of_origin" class="form-control" id="exampleLastName" placeholder="State Of Origin">
                  </div>
                </div>

                <!-- Fifth -->
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <!-- <input type="text" name="status_marital"  id="" placeholder=""> -->
                    <select name="marital_status" id="exampleFirstName" class="form-control">
                      <option disabled selected="selected" value="Marital Status">Marital Status</option>
                      <option value="married">Married</option>
                      <option value="single">Single</option>
                      <option value="divorced">Divorced</option>
                      <option value="widow">Widower</option>
                    </select>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" name="course_of_study" class="form-control" id="exampleLastName" placeholder="Course Of Study">
                  </div>
                </div>

                <!-- Sixth -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="person_address" class="form-control" id="exampleFirstName" placeholder="Address">
                  </div>
                  <div class="col-sm-6">
                    <!-- Start of select  -->
                    <select name="post_apply" class="form-control" id="exampleLastName">
                      <option disabled selected="selected">Position Applying For</option>
                      <option value="Accident/Emergency/Trauma Nurses">Accident/Emergency/Trauma Nurses</option>
                      <option value="Anaesthetic Nurse">Anaesthetic Nurse</option>
                      <option value="Bio-medical Engineer">Bio-medical Engineer</option>
                      <option value="Business &amp; Strategic Manager">Business &amp; Strategic Manager</option>
                      <option value="Business Development Manager">Business Development Manager</option>
                      <option value="BUSINESS DEVELOPMENT OFFICERS">BUSINESS DEVELOPMENT OFFICERS</option>
                      <option value="Canteen Services">Canteen Services</option>
                      <option value="Cashier">Cashier</option>
                      <option value="Commercial Accountant">Commercial Accountant</option>
                      <option value="Commercial Manager">Commercial Manager</option>
                      <option value="Consultant in Anesthesiology">Consultant in Anesthesiology</option>
                      <option value="Consultant in Cardiology">Consultant in Cardiology</option>
                      <option value="Consultant in Dermatology">Consultant in Dermatology</option>
                      <option value="Consultant in Endocrinology">Consultant in Endocrinology</option>
                      <option value="Consultant in Gastroenterology">Consultant in Gastroenterology</option>
                      <option value="Consultant in General Surgery">Consultant in General Surgery</option>
                      <option value="Consultant in Heamatology">Consultant in Heamatology</option>
                      <option value="Consultant in Nephrology">Consultant in Nephrology</option>
                      <option value="Consultant in Neurology">Consultant in Neurology</option>
                      <option value="Consultant in Obstetrics and Gynecology">Consultant in Obstetrics and Gynecology</option>
                      <option value="Consultant in Ophthalmology">Consultant in Ophthalmology</option>
                      <option value="Consultant in Peadiatrics">Consultant in Peadiatrics</option>
                      <option value="Consultant in Psychiatry">Consultant in Psychiatry</option>
                      <option value="Consultant in Pulmonology">Consultant in Pulmonology</option>
                      <option value="Consultant in Radiology">Consultant in Radiology</option>
                      <option value="Consultant in Rheumatolog">Consultant in Rheumatolog</option>
                      <option value="Consultant Physician">Consultant Physician</option>
                      <option value="Corporate Relations Manager">Corporate Relations Manager</option>
                      <option value="Cost Control and Management Accountant">Cost Control and Management Accountant</option>
                      <option value="Dental Surgeon">Dental Surgeon</option>
                      <option value="Dental Technologist">Dental Technologist</option>
                      <option value="Dental Therapist">Dental Therapist</option>
                      <option value="Dialysis Nurse">Dialysis Nurse</option>
                      <option value="Dietician">Dietician</option>
                      <option value="Driver">Driver</option>
                      <option value="Electrical Technicain">Electrical Technicain</option>
                      <option value="Gardeners">Gardeners</option>
                      <option value="Head of Administration">Head of Administration</option>
                      <option value="Health Medical Records Officer">Health Medical Records Officer</option>
                      <option value="House Keeping Supervisor">House Keeping Supervisor</option>
                      <option value="Housekeepers">Housekeepers</option>
                      <option value="Housekeeping Supervisor">Housekeeping Supervisor</option>
                      <option value="Human Resources Officer">Human Resources Officer</option>
                      <option value="Intensive Care Nurse">Intensive Care Nurse</option>
                      <option value="Laboratory Scientist">Laboratory Scientist</option>
                      <option value="Legal / Administrative Officer">Legal / Administrative Officer</option>
                      <option value="Maintenance Officer (Mechanical/Electrical)">Maintenance Officer (Mechanical/Electrical)</option>
                      <option value="Medical Imaging Scientists">Medical Imaging Scientists</option>
                      <option value="Medical Officers">Medical Officers</option>
                      <option value="Mortuary Attendants">Mortuary Attendants</option>
                      <option value="Nursing Officer">Nursing Officer</option>
                      <option value="Operation Executive">Operation Executive</option>
                      <option value="Optician">Optician</option>
                      <option value="Optometrist">Optometrist</option>
                      <option value="ORTHOPAEDIC SURGEON (FULL TIME/PART TIME)">ORTHOPAEDIC SURGEON (FULL TIME/PART TIME)</option>
                      <option value="Paediatric Nurse">Paediatric Nurse</option>
                      <option value="Peri-operative Nurse">Peri-operative Nurse</option>
                      <option value="Personal Assistant/Administrative Executive">Personal Assistant/Administrative Executive</option>
                      <option value="Pharmacist">Pharmacist</option>
                      <option value="Plumbers">Plumbers</option>
                      <option value="Principal Accountant">Principal Accountant</option>
                      <option value="Principal Laboratory Scientist">Principal Laboratory Scientist</option>
                      <option value="Principal Medical Officer">Principal Medical Officer</option>
                      <option value="Principal Nursing Officer">Principal Nursing Officer</option>
                      <option value="Principal Pharmacist">Principal Pharmacist</option>
                      <option value="Property Manager">Property Manager</option>
                      <option value="Resident Cook/Chef">Resident Cook/Chef</option>
                      <option value="Security Officer">Security Officer</option>
                      <option value="Senior Accountants">Senior Accountants</option>
                      <option value="Senior Internal Control Officer">Senior Internal Control Officer</option>
                      <option value="Senior Laboratory Scientist">Senior Laboratory Scientist</option>
                      <option value="Senior Medical Officers">Senior Medical Officers</option>
                      <option value="Senior Nursing Officer">Senior Nursing Officer</option>
                      <option value="Software Programmer">Software Programmer</option>
                      <option value="Store keeper">Store keeper</option>
                      <option value="System Network Administrator">System Network Administrator</option>

                    </select>
                    <!-- End of select -->
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="secret_phase" class="form-control" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="c_password" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                  <input type="submit" name="submit-reg" value="REGISTER" class="btn btn-success btn-user btn-block">
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
