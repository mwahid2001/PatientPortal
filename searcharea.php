<?php
session_start(); // Add this line to start the session
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
    <link rel="stylesheet" href="css/style.css">
<style>
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
        body{
          background-image: url("images/patientsss.jpg");
          background-repeat: no-repeat, repeat;
          background-size: cover;
        }
        .table{
        }

.card{
  
  border: none;
  background: #f4f4f4;

}
.search {
  width: 100%;
      margin-bottom: auto;
    margin-top: 20px;
    height: 50px;
        background-color: #fff;
    padding: 10px;
    border-radius: 5px;
}

.search-input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    margin-top: 5px;
    caret-color: transparent;
    line-height: 20px;
    transition: width 0.4s linear
}

.search .search-input {
    padding: 0 10px;
    width: 100%;
    caret-color: #878b9e;
    font-size: 19px;
    font-weight: 300;
    color: black;
    transition: width 0.4s linear;
}


.search-icon {
        height: 34px;
    width: 34px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #b2b2b2;
    font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
}

.search-icon:hover{

  color: #fff !important;
}

a:link {
    text-decoration: none
}



.card-inner {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    border:none;
    cursor: pointer;
    transition: all 2s;
}


.card-inner:hover{

   transform: scale(1.1);

}

.mg-text span{

  font-size: 12px;

}

.mg-text{

  line-height: 14px;
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
        <a class="nav-link" href="register.php">ADD NEW PATIENT</a>
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
          <li><a class="dropdown-item" href="searcharea.php">SEARCH BY AREA</a></li>
          <li><a class="dropdown-item" href="searchcond.php">SEARCH BY CONDITION/MEDICATION</a></li>
          
        </ul>
      </div>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">



<form method="POST" action="searcharea.php">
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <div class="card p-4 mt-3">
        <h3 class="heading mt-5 text-center">SEARCH FOR PATIENT AREA </h3>
        <div class="d-flex justify-content-center px-5">
        <div class="search">
              <input type="text" class="search-input" placeholder="Search..." name="search_area">
              <button type="submit" class="search-icon" name="search_button">
                <i class="fa fa-search"></i>
          <!-- Replace 'search.php' with the name of the PHP file handling the search -->
              </button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>


<!-- Image and text -->
<nav class="navbar navbar-light  bg-*">
  <a class="navbar-brand" href="#">
    <img src="images/3082383.png" width="30" height="30" class="d-inline-block align-top" alt="">
    PATIENTS IN SPECIFIC AREA
  </a>
</nav>

<table class="table" > 
        <thead>
          <tr>
            <th scope="col">AREA</th>
            <th scope="col">ID</th>
            <th scope="col">GENDER</th>
            <th scope="col">ETHINCITY</th>
            <th scope="col">CONDITION</th>
            <th scope="col">DIAGNOSIS</th>
          </tr>
        </thead>
        <tbody>
<?php
// Assuming you have established a database connection ($con) already

if (isset($_POST['search_button'])) {
  $searchArea = $_POST['search_area'];

  $stmt = $con->prepare("SELECT * FROM patients WHERE area LIKE :search_area");
  $stmt->execute(array(
    "search_area" => '%' . $searchArea . '%'
  ));


  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ($stmt->rowCount() > 0) {
    // Display or process the search results
    foreach ($results as $patient) {
      // Access the retrieved data, e.g., $row['column_name']
      ?>
          <tr>
            <td><?php echo $patient["area"] ?></td>
            <td><?php echo $patient["patient_id"] ?></td>
            <td><?php echo $patient["gender"] ?></td>
            <td><?php echo $patient["eth"] ?></td>
            <td><?php echo $patient["cond"] ?></td>
            <td><?php echo $patient["treatment"] ?></td>
          </tr>
      <?php
    }
  } else {
    echo "<div class='alert alert-warning'>No results found.</div>";
  }
}
?>
    </tbody>
  </table>

  </div>

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
      <a class="text-reset fw-bold" href=""> PatientPortal.com</a>
    </div>
  </footer>
  
  
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>