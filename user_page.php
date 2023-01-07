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
}
    </style>
    <body class="text-center">
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
              <a class="nav-link active"  href="#">View All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="add.php">Add Customer</a>
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
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">CNO</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Licence Number</th>
      <th scope="col">Ph No</th>

      <th scope="col">Vehicle No</th>
      <th scope="col">Class Of Vehicle</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Engine No</th>
      <th scope="col">Chasis No</th>
      <th scope="col">Insurance No</th>
      <th scope="col">Insurance Amount</th>
      <th scope="col">Insurance Agency</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $conn=mysqli_connect('localhost','root','','insurance_management');
  $select="SELECT customer_table.cus_no,cus_name,cus_address,licence_no,phno,vehicle_table.v_id,cov,brand,model,engine_no,chasis_no,insurance_details.i_no,i_amt,i_agncy FROM customer_table,vehicle_table,insurance_details WHERE vehicle_table.cus_no=customer_table.cus_no AND vehicle_table.v_id=insurance_details.v_id;";
  $res = mysqli_query($conn, $select);

if ($count=mysqli_num_rows($res) > 0) {

  while($data = mysqli_fetch_assoc($res)) {
 ?>
 <tr>

   <td><?php echo $data['cus_no']; ?> </td>

   <td><?php echo $data['cus_name']; ?> </td>
   <td><?php echo $data['cus_address']; ?> </td>

   <td><?php echo $data['licence_no']; ?> </td>
   <td><?php echo $data['phno']; ?> </td>
   <td><?php echo $data['v_id']; ?> </td>
   <td><?php echo $data['cov']; ?> </td>
   <td><?php echo $data['brand']; ?> </td>
   <td><?php echo $data['model']; ?> </td>
   <td><?php echo $data['engine_no']; ?> </td>
   <td><?php echo $data['chasis_no']; ?> </td>
   <td><?php echo $data['i_no']; ?> </td>
   <td><?php echo $data['i_amt']; ?> </td>
   <td><?php echo $data['i_agncy']; ?> </td>

 <tr>
 <?php
}} else { ?>
    <tr>
     <td >No data found</td>
    </tr>
 <?php } ?>
</tbody>    
</table>
        <script link="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>