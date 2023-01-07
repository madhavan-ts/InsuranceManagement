<?php
session_start();
if(isset($_POST['submit'])){
  $conn=mysqli_connect('localhost','root','','insurance_management');

   $name = mysqli_real_escape_string($conn, $_POST['uname']);
  //  $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['psw']);
  //  $cpass = md5($_POST['cpsw']);
  //  $user_type = $_POST['user-type'];

   $select = " SELECT * FROM user_table WHERE username = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['username'];
         $_SESSION['admin_pass'] = $row['password'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         $_SESSION['user_pass'] = $row['password'];

         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'INCORRECT Username or Password!';
   }

};
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
    <!-- <img class="mb-4" src="log image.png" alt="login image.png" width="72" height="57"> -->

    <svg  width="72" height="57" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
    <h1 class="h3 mb-3 fw-normal">Sign in</h1>
    <?php
    if(isset($error)){
         foreach($error as $error){
            echo '<div class="alert alert-danger alert-dismissible fade show p-2" role="alert">'.$error.'</div>';
         }
      }
      ?>
    <div class="form-floating">
      <input name="uname" type="text" class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input name="psw" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button name="submit" class="btn-signin w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
    </form>
    <form action="reg.php" method="post">
    <button class="btn-signin w-100 btn btn-lg btn-outline-secondary " >Add User</button>
  </form>
</main>
        <script link="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>