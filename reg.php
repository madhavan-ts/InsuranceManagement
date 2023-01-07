<?php
if(isset($_POST['submit'])){
  $conn=mysqli_connect('localhost','root','','insurance_management');
  $name = mysqli_real_escape_string($conn, $_POST['uname']);
  // $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['psw']);
  $cpass = md5($_POST['cpsw']);
  $user_type = strtolower($_POST['user-type']);

  $select = " SELECT * FROM user_table WHERE username = '$name' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

     $error[] = 'Username already exist!';

  }else{

     if($pass != $cpass){
        $error[] = 'Password not matched!';
     }else{
        $insert = "INSERT INTO user_table(username, password, user_type) VALUES('$name','$pass','$user_type')";
        mysqli_query($conn, $insert);
        header('location:login.php');
     }
  }

}

?>

<!DOCTYPE html>
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
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}
.btn-signin{
    width: 45%;
    margin-right: 10px;
    margin-top: 15px;
}
.form-floating{
    margin-bottom: 15px;
}
.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}



.form-signin input[type="password"] {
  margin-bottom: 10px;
}
    </style>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
  <form action="" method="post">
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">User Registration</h1>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<div class="alert alert-danger alert-dismissible fade show p-2" role="alert">'.$error.'</div>';
         }
      }
      ?>
    <div class="form-floating">
      <input name="uname" type="text" class="form-control" id="floatingInput" placeholder="name" required>
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input name="psw" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input name="cpsw" type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" required>
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <!-- <div class="form-floating"> -->
    <select name="user-type" class="form-select" id="floatingSelect" required>
      <option   value="admin">Admin</option>
      <option selected value="user">User</option>
    </select>
    <!-- </div> -->

    
    <button name="submit" class="btn-signin w-100 btn btn-lg btn-primary" type="submit">Add User</button>
    </form>
  <form action="login.php" method="post">
    <button type="submit" class="btn-signin w-100 btn btn-lg btn-outline-secondary" name="login">Log in</button>
  </form>
</main>
        <script link="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>