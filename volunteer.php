<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Animal_Cruelty";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    echo "DB Not connected";
}
else{
  if(isset($_POST['submit'])){
    echo "Form submitted";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $education = $_POST['edu'];
    $reason = $_POST['desc'];

    if(!empty($fname)|| !empty($lname) || !empty($age) || !empty($email) || !empty($mobile) || !empty($education) || !empty($reason)){
      $query = "Insert Into `volunteers`(fname,lname, age, email,mobile,education,reason)values('$fname','$lname', '$age', '$email','$mobile','$education' , '$reason')";
      $run = mysqli_query($conn , $query) or die(mysqli_error($conn));
      if($run){
         echo "Form Submitted Successfully";
      }
      else{
         echo "Form not submitted";
      }
    }
    else{
        echo "Form fields not filled";
      }
  }
}
?>
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
    
    <title>Assignment-1c
    </title>
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
                <a class="nav-link active" href="volunteer.html">Volunteer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1>Come Volunteer with Us!</h1>
      <div class="card">
        <form class="form" id="form" action ="volunteer.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" id="fname" name="fname" onkeyup="showHint(this.value)">
              <p>Suggestions: <span id="txtHint"></span></p>
              <!-- <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small> -->
            </div>
            <div class="mb-3 form-control ">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" class=""  aria-describedby="emailHelp" id="lname" name="lname">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="mb-3 form-control">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="number" class="" aria-describedby="emailHelp" id="age" name="age">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="mb-3 form-control">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="" aria-describedby="emailHelp" id="email" name="email">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="mb-3 form-control">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input type="number" class=""  aria-describedby="emailHelp" id="mobile" name="mobile">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Education Background</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" id="edu" name="edu">
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <div class="mb-3 form-control">
                <label for="exampleInputEmail1" class="form-label">Why would you like to work with us?</label>
                <textarea class="exampleFormControlTextarea1" placeholder="Enter in detail" style="height: 100px; width: 406px !important;" id="desc" name="desc"></textarea>
                <!-- <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small> -->
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
          </form>
    
      </div>

      <script src="FormJavaScript.js"></script>
      <script>
        function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
      </script>
      
</body>
</html>