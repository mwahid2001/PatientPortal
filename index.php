<?php
  include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PatientPortal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type= "text/css" rel="stylesheet" href="css/style.css">
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
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">ADD NEW PATIENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#phys">PHYSICIANS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pat">PATIENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#area">AREAS</a>
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
<div class="jumbotron">
        <h1 class="display-10">Welcome to Patient Portal</h1>
        <p class="lead">Patient Portal is a comprehensive online platform designed to enhance communication and collaboration between patients and healthcare providers. Serving as a secure gateway to medical information and healthcare services, the website offers a range of features to streamline and improve the patient experience, </p>
        <hr class="my-4"></hr>
        <p>It uses utility classes for Representation of patient and Physicians data.</p>
        <p class="lead">
          <a class="btn btn-secondary btn-lg" href="#" role="button">Learn more</a>
        </p>
        </p>
      </a>
  </div>
<!--About Us--> 
<!--About Us-->
<!--PHYSICIANS-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <span id="phys">
    <img src="images/doctor-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    ELITE PRACTICTIONERS
      </span>
  </a> 
</nav>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number of Patients</th>
      <th scope="col">Successful Treatment Percentage %</th>
      <p><th scope="col">Specialization</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dr. Mohamed Soliman</td>
      <td>530</td>
      <td>90%</td>
      <td>Neurologist</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Dr Ahmed Mohammady </td>
      <td>523</td>
      <td>90%</td>
      <td>Orthopedic Surgeon</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dr. Amira Elmasry</td>
      <td>470</td>
      <td>86%</td>
      <td>Gynecologist</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Dr. Mamdouh Hamad</td>
      <td>450</td><centre>
      <td>84%</td>
      <td>Neurologist</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Dr. Mahmoud Hemida</td>
      <td>420</td>
      <td>84%</td>
      <td>Heart Surgueon</td>
    </tr>
  </tbody>
</table>
<!--PHYS-->
<!--Areas-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <span id="area">
    <img src="images/3082383.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Popular Patient Service Areas
      </span>
    </a> 
</nav>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Location</th>
      <th scope="col">Number of Patients</th>
      <th scope="col">Successful Treatment Percentage %</th>
      <p><th scope="col">Count of specializations</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Saudi German Hospital</td>
      <td>Cairo | Alexandria</td>
      <td>10362</td>
      <td>91%</td>
      <td>73</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>The Egyptian Hospital </td>
      <td>Hurghada</td>
      <td>7322</td>
      <td>90%</td>
      <td>69</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>AlAraby Hospital</td>
      <td>Minofya</td>
      <td>6233</td>
      <td>87%</td>
      <td>60</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>The Medical Center for Al Mokawloon AlArab</td>
      <td>Cairo</td>
      <td>6137</td><centre>
      <td>86%</td>
      <td>70</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>57357 Childern's Cancer Hospital</td>
      <td>Cairo</td>
      <td>16720</td>
      <td>77%</td>
      <td>2</td>
    </tr>
  </tbody>
</table>

<!--Patients-->

<div class="container">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <span id="pat">
    <img src="images/patients.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Patients
      </span>
    </a>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/male1.jpg" width=200 height=300  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Patient 1</h5>
      <p class="card-text">This patient was diagnosed with Coronary Artery disease at a late stage, was treated in Saudi German Hospital, the treatment plan included  Coronary angioplasty and stenting, lifestyle modifications, medications taken was Aspirin, Statins</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 2 days</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/male1.jpg" width=200 height=300 alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Patient 2</h5>
      <p class="card-text">This Patient was diagnosed with Chronic obstructive pulmonary disease (COPD) and aged 70 years, was treated Magdi Yaacoub Heart Hospital, the treatment plan included Inhaler therapy, pulmonary rehabilitation, smoking cessation, breathing exercises, medications were Bronchodilators, Inhaled corticosteroids</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 days ago</small>
    </div>
  </div>
  <div class="card style">
    <img class="card-img-top" src="images/male1.jpg" width=200 height=300 alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Patient 3</h5>
      <p class="card-text">This Patient was diagnosed with late-stage breast cancer aged 52 years, the treatment underwent chemotherapy, radiotherapy, surgery, hormone therapy, supportive care and her response to treatment was impressive, resulting in a significant reduction in tumor size and improvement in her overall condition.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 days ago</small>
    </div>
  </div>
</div>
</div>
</nav>
<!--Patients-->
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
            <i class="fas fa-envelope me-3 text-secondary"></i> mahmoud.alazhary@ejust.edu.eg
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +20 01550496604</p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href=""> PatientPortal.com</a>
  </div>
</div>
</footer>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
