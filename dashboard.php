<?php 
session_start();

if (!isset($_SESSION['username'])) {
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   <div class="dashboardd">

      <div class="p-5 bg-light rounded-3">
         <div class="container d-flex py-5">
           <div class="col-md-6">
            <h1 class="display-5 fw-bold">Halo, <span class="text-primary"><?= ucfirst($_SESSION['username']) ?></span></h1>
            <p class=" fs-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt tempore quis amet? Iusto dolor modi adipisci, beatae laborum quibusdam ad labore at inventore, aperiam, vel autem voluptas. Ipsum, deserunt dolorem.</p>
            <button class="btn btn-primary btn-lg" type="button">About Me</button>
           </div>
           <div class="col-md-6">
            <div class="kotak d-flex justify-content-center">
            <marquee
              direction="down"
              width="300"
              height="270"
              behavior="alternate"
              class="border border-primary border-4 rounded-3">
            <marquee behavior="alternate" class="fs-2 fw-bold text-primary"><?= strtoupper($_SESSION['username']) ?></marquee>
            </div>
           </div>
         </div>
        </div>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>