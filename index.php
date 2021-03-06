<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Animal_Cruelty";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    echo "DB Not connected";
}
// echo "Connected successfully";

// if(isset($_POST['submit'])){
//     $title = $_POST['title'];
//     $link = $_POST['link'];
//     if(!empty($title)|| !empty($link)){

//       $query = "Insert Into `ISA-Youtube`(Title,Link)values('$title','$link')";
//       $run = mysqli_query($conn , $query) or die(mysqli_error($conn));
//       if($run){
//         echo "Form Submitted Successfully";
//       }
//       else{
//         echo "Form not submitted";
//       }

//   }
//   else{
//     echo "All fields required";
//   }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style_b.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    

    <title>Assignment-1a</title>
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
                <a class="nav-link active home" aria-current="page" href="bootstrap.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="volunteer.php">Volunteer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     <div class="row">
         <div class="col-lg-6 pic1">
            <img class="pic1_i" src="pic1-2.tiff" alt="">
         </div>
         <div class="col-lg-6 pic1_d">
            <div class="card pic1_t" style="width: 30rem;">
                <div class="card-body">
                  <h3 class="card-title">What we do?</h5>
                  
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis velit elit, porttitor in lobortis vitae, eleifend a erat. 
                    Integer feugiat, tellus sed aliquet ultrices, massa erat hendrerit 
                    ligula, vitae tincidunt urna nibh ornare purus. Nullam varius elit 
                    lectus, eget pellentesque tellus lacinia a.
                    Vivamus ac lectus eleifend, laoreet elit id, consectetur eros. 
                    Maecenas turpis ante, aliquet et mollis rutrum, iaculis quis lacus. 
                    Aenean posuere porttitor laoreet. Vivamus sed ornare ante, at vehicula 
                    sem. Suspendisse eu pretium nisi. Suspendisse potenti. Etiam porta 
                    tellus ligula, lobortis luctus ipsum lacinia volutpat.</p>
                  
                </div>
              </div>
        </div>
     </div>
     <div class="row">
         <div class="col-lg-6 pic2_t">
            <div class="card pic1_t" style="width: 30rem;">
            <div class="card-body">
                <h3 class="card-title">Animal Cruelty in india</h5>
                
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Duis velit elit, porttitor in lobortis vitae, eleifend a erat. 
                  Integer feugiat, tellus sed aliquet ultrices, massa erat hendrerit 
                  ligula, vitae tincidunt urna nibh ornare purus. Nullam varius elit 
                  lectus, eget pellentesque tellus lacinia a.
                  Vivamus ac lectus eleifend, laoreet elit id, consectetur eros. 
                  Maecenas turpis ante, aliquet et mollis rutrum, iaculis quis lacus. 
                  Aenean posuere porttitor laoreet. Vivamus sed ornare ante, at vehicula 
                  sem. Suspendisse eu pretium nisi. Suspendisse potenti. Etiam porta 
                  tellus ligula, lobortis luctus ipsum lacinia volutpat.</p>
                
              </div>
            </div>
         </div>
         <div class="col-lg-6 pic2_i">
            <img class="pic1_i pic_r"src="pic2.jpg" alt="">
         </div>
     </div>

     <div class="row stats">
         <h1 style="font-family: 'Merriweather', serif;">Our Progress</h1>
         <div class="col-lg-3 stat">
            <i class="fas fa-users fa-5x"></i>
            <h2>Volunteers</h2>
            <h3>5000+</h3>
         </div>
         <div class="col-lg-3 stat">
            <i class="fas fa-landmark fa-5x ngo"></i>
            <h2>NGOs</h2>
            <h3>5000+</h3>
        </div>
        <div class="col-lg-3 stat fa-5x">
            <i class="fas fa-paw "></i>
            <h2 class="cases">Cases taken</h2>
            <h3>5000+</h3>
        </div>
        <div class="col-lg-3 stat fa-5x">
            <i class="fas fa-rupee-sign donate"></i>
            <h2>Donations</h2>
            <h3 class="donate_a">5000+</h3>
        </div>
     </div>
     <div class="row">
         <h1 class="help" style="font-family: 'Merriweather', serif;">Help us help more paws!</h1>
         <div class="col-lg-4" style="padding-left: 50px;">
            <div class="card pic1_t" style="width: 20rem; border: 5px solid rgb(45, 10, 10);">
                <div class="card-body">
                    <h3 class="card-title">Volunteer</h5>
                    
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                      Duis velit elit, porttitor in lobortis vitae, eleifend a erat. 
                      Integer feugiat, tellus sed aliquet ultrices, massa erat hendrerit 
                      ligula, vitae tincidunt urna nibh ornare purus. Nullam varius elit 
                      lectus, eget pellentesque tellus lacinia a.</p>
                      <a href="#" class="btn btn-primary btn-lg">Volunteer</a>
                    
                  </div>
                </div>
         </div>
         <div class="col-lg-4" style="padding-left: 50px;">
            <div class="card pic1_t" style="width: 20rem; border: 5px solid rgb(45, 10, 10);">
                <div class="card-body">
                    <h3 class="card-title">Report</h5>
                    
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                      Duis velit elit, porttitor in lobortis vitae, eleifend a erat. 
                      Integer feugiat, tellus sed aliquet ultrices, massa erat hendrerit 
                      ligula, vitae tincidunt urna nibh ornare purus. Nullam varius elit 
                      lectus, eget pellentesque tellus lacinia a.</p>
                      <a href="#" class="btn btn-primary btn-lg report_b">Report</a>
                    
                  </div>
                </div>
        </div>
        <div class="col-lg-4" style="padding-left: 50px;">
            <div class="card pic1_t" style="width: 20rem; border: 5px solid rgb(45, 10, 10); margin-bottom: 70px;">
                <div class="card-body">
                    <h3 class="card-title">Donate</h5>
                    
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                      Duis velit elit, porttitor in lobortis vitae, eleifend a erat. 
                      Integer feugiat, tellus sed aliquet ultrices, massa erat hendrerit 
                      ligula, vitae tincidunt urna nibh ornare purus. Nullam varius elit 
                      lectus, eget pellentesque tellus lacinia a.</p>
                      <a href="#" class="btn btn-primary btn-lg donate_b">Donate</a>
                  </div>
                </div>
        </div>
     </div>

     <div class="row connect">
       <h1 style="font-family: 'Merriweather', serif; padding-top:20px">Connect With Us!</h1>
       <div class="col-lg-3">
        <i class="fab fa-google fa-5x google"></i>
       </div>
       <div class="col-lg-3">
        <i class="fab fa-facebook-f fa-5x fb"></i>
      </div>
      <div class="col-lg-3">
        <i class="fab fa-instagram-square fa-5x insta"></i>
      </div>
      <div class="col-lg-3">
        <i class="fab fa-whatsapp fa-5x wa"></i>
      </div>
     </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>