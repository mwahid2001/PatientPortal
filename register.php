<?php
session_start(); // Add this line to start the session

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $patient_id = $_POST["patient_id"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $eth = $_POST["eth"];
  $blood_type = $_POST["blood_type"];
  $cond = $_POST["condition"]; // Corrected variable name
  $area = $_POST["area"];
  $number = $_POST["number"];
  $chronic = $_POST["chronic"];
  $birthdate = $_POST["birthdate"];
  $creationdate = $_POST["creationdate"];
  $treatment =$_POST["treatment"];
  $dosage = $_POST["dosage"];
  $frequency = $_POST["frequency"];

  $stmt = $con->prepare("SELECT * FROM patients WHERE patient_id = ?");
  $stmt->execute(array($patient_id));

  if ($stmt->rowCount() > 0) {
      $_SESSION["registerError"] = "This patient ID is already registered";
      header('Location: register.php');
      exit(); // Add exit() to stop further execution
  } else {
      $stmt = $con->prepare("INSERT INTO patients (name, patient_id, gender, age, eth, blood_type, cond, area, number, chronic, birthdate, creationdate,treatment,dosage,frequency)
        VALUES (:name, :patient_id, :gender, :age, :eth, :blood_type, :cond, :area, :number, :chronic, :birthdate, :creationdate,:treatment,:dosage,:frequency)");
      $stmt->execute(array(
          "name" => $name,
          "patient_id" => $patient_id,
          "gender" => $gender,
          "age" => $age,
          "eth" => $eth,
          "blood_type" => $blood_type,
          "cond" => $cond,
          "area" => $area,
          "number" => $number,
          "chronic" => $chronic,
          "birthdate" => $birthdate,
          "creationdate" => $creationdate,
          "treatment" =>$treatment,
          "dosage" => $dosage,
          "frequency" => $frequency,
      ));
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PatientPortal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<style>
  body {
    background-image: url("images/luxa.org-opacity-changed-Electronic-Health-Records.jpg");
    background-repeat: no-repeat, repeat;
    background-size: cover;
  }
          html{
          scroll-behavior:smooth;
        }
        @keyframes fade-in {
          from {
            opacity: 0;
          }
          to {
            opacity: 1;
          }
        }
        body {
  animation: fade-in 0.5s ease-in-out;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-*">
    <a class="logo" href="#"><img src="images/logo4 (2).png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <a class="navbar-brand" href="#">Patient Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#patient">ADD NEW PATIENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">PHYSICIANS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">PATIENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">AREAS</a>
      </li>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Explore Patient Portal
        </button>
        <ul class="dropdown-menu">
          <a><a class="dropdown-item" href="searcharea.php">SEARCH BY AREA</a></a>
          <a><a class="dropdown-item" href="searchcond.php">SEARCH BY CONDITION/MEDICATION</a></a>
          
        </ul>
      </div>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>
<div id="patient"><nav class="navbar navbar-light bg-*">
  <a class="navbar-brand" href="#">
    <img src="images/a.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Register a New Patient
  </a>
</div>
</nav>

<form method="POST" action="register.php">
  <div class="form-row ">
    <div class="form-group col-md-6">
      &nbsp;<label for="inputEmail4">Patient Id</label>
      <input type="number" class="form-control" id="inputEmail4" name="patient_id" placeholder="Identification Number">
    </div>
    <div class="form-group col-md-6">
      &nbsp;<label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="name" placeholder="Enter your full name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      &nbsp;<label for="inputEmail4">Gender</label>
      <input type="text" class="form-control" id="inputEmail4" name="gender" placeholder="Select your gender">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Blood Type</label>
      <input type="text" class="form-control" id="inputPassword4" name="blood_type" placeholder="Blood type (e.g., A+, B-, AB, O...)">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Age</label>
      <input type="text" class="form-control" id="inputPassword4" name="age" placeholder="Age in years">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Ethnicity</label>
      <input type="text" class="form-control" id="inputPassword4" name="eth" placeholder="Ethnicity (optional)">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      &nbsp;<label for="inputEmail4">Condition</label>
      <input type="text" class="form-control" id="inputEmail4" name="condition" placeholder="Patient condition or symptoms">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Chronic Disease</label>
      <input type="text" class="form-control" id="inputPassword4" name="chronic" placeholder="Chronic diseases (if applicable)">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Phone Number</label>
      <input type="text" class="form-control" id="inputPassword4" name="number" placeholder="+20 01XXXXXXXXX">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Adress/Area</label>
      <input type="text" class="form-control" id="inputPassword4" name="area" placeholder="Patient location">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <p>&nbsp;<label for="inputCity">Birth Date</label>
      <input type="date" class="form-control" id="inputCity"  name="birthdate" placeholder="MM/DD/YYYY">
    </div>
    <div class="form-group col-md-6">
      &nbsp;<label for="inputCity">Creation Date</label>
      <input type="date" class="form-control" id="inputCity" name="creationdate" placeholder="MM/DD/YYYY">
    </div>
    <div class="mb-3">
    &nbsp;&nbsp;<label for="formFile" class="form-label">Previous Medications or Films/Prescriptions</label>
    <input class="form-control" type="file" id="formFile">
  </div>
  <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Treatment Plan</label>
      <input type="text" class="form-control" id="inputPassword4" name="treatment" placeholder="Treatment Plan or Medication specified by practitioner">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Dosage</label>
      <input type="text" class="form-control" id="inputPassword4" name="dosage" placeholder="Medication">
    </div>
    <div class="form-group col-md-3">
      &nbsp;<label for="inputPassword4">Frequency/Day</label>
      <input type="text" class="form-control" id="inputPassword4" name="frequency" placeholder="Frequency of Dosage">
    </div>
    </div>
  &nbsp;
  <button type="submit" class="btn btn-success btn-lg ">Add</button>
  
</form>
  <!-- Section: Links  -->
  <ls id="contact">
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Patient Portal</h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Avaliable Data
          </h6>
          <p>
            <a href="#!" class="text-reset">PATIENTS</a>
          </p>
          <p>
            <a href="#!" class="text-reset">PHYSICIANS</a>
          </p>
          <p>
            <a href="#!" class="text-reset">AREAS OF TREATMENT</a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Alexandria, Borg AlArab, Egypt</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i> mohamed.wahid@ejust.edu.eg
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +20 01550496604</p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/"> PatientPortal.com</a>
  </div>
</footer>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//   $name = $_POST["name"];
//   $patient_id = $_POST["patient_id"];
//   $gender = $_POST["gender"];
//   $age = $_POST["age"];
//   $eth = $_POST["eth"];
//   $blood_type = $_POST["blood_type"];
//   $cond = $_POST["cond"];
//   $area = $_POST["area"];
//   $number = $_POST["number"];
//   $chronic = $_POST["chronic"];
//   $birthdate = $_POST["birthdate"];
//   $creationdate = $_POST["creationdate"];

//   $stmt = $con->prepare("SELECT * FROM patients WHERE patient_id=?");
//   $stmt->execute(array($patient_id));

//   if ($stmt->rowCount() > 0) {
//       $_SESSION["registerError"] = "This patient ID is already registered";
//       header('Location: register.php');
//   } else {
//       $stmt = $con->prepare("INSERT INTO patients (name, patient_id, gender, age, eth, blood_type, condition, area, number, chronic, birthdate, creationdate)
//         VALUES (:name, :patient_id, :gender, :age, :eth, :blood_type, :condition, :area, :number, :chronic, :birthdate, :creationdate)");
//       $stmt->execute(array(
//           "name" => $name,
//           "patient_id" => $patient_id,
//           "gender" => $gender,
//           "age" => $age,
//           "eth" => $eth,
//           "blood_type" => $blood_type,
//           "condition" => $cond,
//           "area" => $area,
//           "number" => $number,
//           "chronic" => $chronic,
//           "birthdate" => $birthdate,
//           "creationdate" => $creationdate,
//       ));
//   }
//   echo "hi";
// }

// ?>
