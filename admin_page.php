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
  align-items: center;
  /* padding-top: 40px; 
  padding-bottom: 40px; */
  background-color: #f5f5f5;
}
    </style>
    <body >
    <nav class="navbar navbar-expand-lg  bg-light">
      <div class="container-fluid">
          <?php 
        echo '<a class="navbar-brand" href="#">Welcome '.$_SESSION['admin_name'].'</a>';
        ?>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link"  href="alter.php">Alter</a>
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
      <th scope="col">id</th>
      

      <th scope="col">Username</th>
      <th scope="col">password</th>
      <th scope="col">User Type</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $conn=mysqli_connect('localhost','root','','insurance_management');
  $select="SELECT * FROM user_table;";
  $res = mysqli_query($conn, $select);

if ($count=mysqli_num_rows($res) > 0) {

  while($data = mysqli_fetch_assoc($res)) {
 ?>
 <tr>
   <td><?php echo $data['id']; ?> </td>

   <td><?php echo $data['username']; ?> </td>
   <td><?php echo $data['password']; ?> </td>

   <td><?php echo $data['user_type']; ?> </td>
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