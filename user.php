<?php

include "connect.php";

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `crud` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      // echo "New record added successfully.";
      header('location:display.php');
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <title>Crud operation</title>
</head>

<body>
   <div class="container my-5">

      <form method="post">
         <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
         </div>
         <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your email" name="mobile" autocomplete="off">
         </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
         </div>

         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

   </div>






   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>