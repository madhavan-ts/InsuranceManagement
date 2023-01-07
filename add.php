<?php
session_start();
  ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- <link rel="stylesheet" href="style.css" type="text/css" media="all" /> -->
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css" media="all" />
        <title>Login page </title>
        
    </head>
    <style>
        html,
body {
  height: 100%;
}

body {
  /* display: flex;
  align-items: center; */
  /* padding-top: 40px; */
  padding-bottom: 40px;

  background-color: #f5f5f5;
  /* margin-bottom: 1em; */
}
    </style>
    <body class="">
    <nav class="navbar navbar-dark navbar-expand-lg  bg-dark">
      <div class="container-fluid">
          <?php 
        echo '<a class="navbar-brand" href="#">Welcome '.$_SESSION['user_name'].'</a>';
        ?>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link "  href="user_page.php">View All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"  href="add.php">Add Customer</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link"  href="pay.php">Make Payment</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link"  href="del.php">Delete Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <article class="mx-5 px-5 my-3" >
        <h3>Customer and Vehicle Details</h3>

        <h4 class="mt-4 mb-2">Customer Details</h4>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <form action="insert.php" method="post">
        <div class="mb-3">    
            <label for="customer_no" class="form-label">Customer Number</label>
            <input name="customer_no" type="text" class="form-control" required id="customer_no" aria-describedby="customer_no">
          </div>
          <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input name="customer_name" type="text" class="form-control" required id="customer_name" aria-describedby="customer_name">
          </div>
          <div class="mb-3">
            <label for="customer_address" class="form-label">Customer Address</label>
            <input name="customer_address" type="text" class="form-control" required id="customer_address" aria-describedby="customer_address">
          </div>
          <div class="mb-3">
            <label for="license_number" class="form-label">Licence Number</label>
            <input name="license_number" type="text" class="form-control" required id="license_number" aria-describedby="license_number">
          </div>
          <!-- <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input name="dob" type="text" class="form-control" required id="dob" aria-describedby="dob">
          </div> -->
          <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input name="phone_number" type="text" class="form-control" required id="phone_number" aria-describedby="phone_number">
          </div>
          

        <h4 class="mt-4 mb-2">Vehicle Details</h4>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <!-- <form acton="insert.php" method="post" > -->
          <div class="mb-3">
            <label for="vehicle_id" class="form-label">Vehicle Id</label>
            <input name="vehicle_id" type="text" class="form-control" required id="vehicle_id" aria-describedby="vehicle_id">
          </div>
          <!-- <div class="mb-3">
            <label for="dop" class="form-label">Date Of Purchase</label>
            <input name="dop" type="text" class="form-control" required id="dop" aria-describedby="dop">
          </div> -->
          <div class="mb-3">
            <label for="cov" class="form-label">Class of Vehicle</label>
            <input name="cov" type="text" class="form-control" required id="cov" aria-describedby="cov">
          </div>
          <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input name="brand" type="text" class="form-control" required id="brand" aria-describedby="brand">
          </div>
          <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input name="model" type="text" class="form-control" required id="model" aria-describedby="model">
          </div>
          <div class="mb-3">
            <label for="engine_number" class="form-label">Engine Number</label>
            <input name="engine_number" type="text" class="form-control" required id="engine_number" aria-describedby="engine_number">
          </div>
          <div class="mb-3">
            <label for="chasis_number" class="form-label">Chasis Number</label>
            <input name="chasis_number" type="text" class="form-control" required id="chasis_number" aria-describedby="chasis_number">
          </div>
         

      </div>
        <h4 class="mt-4 mb-2">Insurance Details</h4>
      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <!-- <form acton="insert.php" method="post"> -->
        <div class="mb-3">
            <label for="insurance_no" class="form-label">Insurance Number</label>
            <input name="insurance_no" type="text" class="form-control" required id="insurance_no" aria-describedby="insurance_no">
          </div>
          <div class="mb-3">
            <label for="insurance_amt" class="form-label">Insurance Amount</label>
            <input name="insurance_amt" type="text" class="form-control" required id="insurance_amt" aria-describedby="insurance_amt">
          </div>
          <div class="mb-3">
            <label for="insurance_agncy" class="form-label">Insurance Agency</label>
            <input name="insurance_agncy" type="text" class="form-control" required id="insurance_agncy" aria-describedby="insurance_agncy">
          </div>
          
          <button type="submit" class="btn mb-5 btn-primary">Submit</button>
        </form>
        </div></div>
    </article>
        <script link="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>


