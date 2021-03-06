<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="volunteer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    
    <title>Assignment-1c-jquery</title>
</head>
<body>
    <!-- Nav Bar -->
      
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="bootstrap.html">Paws</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  home" aria-current="page" href="bootstrap.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="volunteer.html">Volunteer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h1>Get in Touch</h1>

      <div class="card">
        <form class="form" name="contact" action="contact.html">
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" name="fname">
              <!-- <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small class="error">Error Message</small> -->
            </div>
            <div class="">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="lname">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input type="number" class="form-control"  aria-describedby="emailHelp" name="mobile">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </form>
    
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="contact.js"></script>
</body>
</html>