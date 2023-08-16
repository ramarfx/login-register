<?php 
session_start();
require 'config.php';

if (isset($_POST['submit'])) {
  
  global $conn;
   
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];

  if ($password1 != $password2) {
     echo "<script>
     alert('password tidak sama!')
     </script>";
     
     return false;
  }

  $password = password_hash($password1, PASSWORD_DEFAULT);

  $query = "INSERT INTO user VALUES('', '$username', '$email', '$password')";

  $result = mysqli_query($conn, $query);

  if ($result) {
    $_SESSION['username'] = $username;
    header("Location: login.php");
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <!-- <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>

      <div class="user">
         <a href="" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</nav> -->
    
   <div class="container">
         <form action="" method="post" class="form">
            <h1 class="text-center mb-5">Register</h1>

            <div class="form-floating mb-3">
               <input type="username" class="form-control" id="username" name="username" placeholder="username">
               <label for="username" class="form-label" >Username</label>
            </div>
            <div class="form-floating mb-3">
               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
               <label for="email" class="form-label" >Email</label>
            </div>
            <div class="form-floating mb-3">
               <input type="password" class="form-control" id="password" name="password1" placeholder="Password">
               <label for="password" class="form-label">Password</label>
            </div>
            <div class="form-floating mb-3">
               <input type="password" class="form-control" id="password" name="password2" placeholder="Password">
               <label for="password" class="form-label">Confirm Password</label>
            </div>
            <div class="mb-3">
               <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
            </div>
            <a href="login.php" class="link-underline link-underline-opacity-0 text-light-emphasis">sudah memiliki akun? <span class="text-primary">Login sekarang</span></a>
         </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>