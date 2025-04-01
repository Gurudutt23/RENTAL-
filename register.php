<?php

@include 'db_con.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
   $contact = mysqli_real_escape_string($conn, $_POST['mo_num']);

   $select = " SELECT * FROM property_owner WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {

      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO property_owner (uname, email, pass, contact) VALUES('$name','$email','$pass','$contact')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   <link rel="stylesheet" href="reg_log.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>register now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="text" name="name" required placeholder=" Name">
         <input type="email" name="email" required placeholder=" Email">
         <input type="text" name="mo_num" required placeholder=" Phone Number">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="password" name="cpassword" required placeholder="confirm your password">

         <input type="submit" name="submit" value="register now" class="form-btn">
         <p>already have an account? <a href="login.php">login now</a></p>
      </form>

   </div>

</body>

</html>