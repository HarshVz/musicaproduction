<html>
<head>
    <!-- These meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font Awesome link (because Bootstrap 4 dropped the Glyphicons icon font -->
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
<script src="https://kit.fontawesome.com/1ee8f271b9.js"></script>
    
    <link rel="stylesheet" href="index.css"/>
    
    <title>Dubbing</title>

<style>
    #background {
    background: url(img2.png) no-repeat fixed center;
    background-size: cover;
  }


  .card{
    border: 0px;
  }


  



</style>

<style>
.custom-contact .form-label {
    font-weight: bold;
  }

  .custom-contact .form-control {
    border-radius: 0;
  }

  .custom-contact h4 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .custom-contact .mt-4 {
    margin-top: 1.5rem;
  }

  .custom-contact .d-flex {
    align-items: center;
  }

  .custom-contact .d-flex i {
    margin-right: 10px;
  }

  .custom-contact hr {
    border-color: #ddd;
    margin-top: 10px;
    margin-bottom: 10px;
  }


  .custom-contact{
    width: 60%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.col-md-7{
    padding: 20px;
}
.col-md-5{
    background: #000;
    padding: 20px;
    color: white;

}
.form-control {
    height: 52px;
    background: #fff;
    color: #000;
    font-size: 14px;
    border-radius: 2px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.bi{
    font-size: 20px;
}
.d-flex p{
    font-size: 18px;
    padding-left: 10px;
}


@media only screen and (max-width:600px){
    .custom-contact{
        width: 100%;
    }
}



</style>


    
</head>
<body>

<?php
include 'includes/loader.php';
?>


    
    <div class="img" id="background" style="height: 720px; width: auto; position: relative;">
        <!-- nav -->
        <?php
include 'includes/navbar.php';
?>
        
    
        <div class="container">
          <div class="row align-items-center min-vh-100">
            <div class="col-sm-12">
              <div id="content">
                <p class="text-uppercase fs-6 mb-3 active text-center" style="letter-spacing: 5px;">
                  JOIN WITH US
                </p>
                <h2 class="text-center">
                 Musica Production provides complete solutions for films, TV series, documentaries, webisodes, infomercials and much more.</h2>
              </div>
            </div>
          </div>
        </div>
  
        
      </div>
  
<!--Text-->


<div class="bg-white">
    <div class="row">
      <div class="col text-center">
        <p class="hero_full fs-4 text-dark m-5">Join us on this extraordinary journey as we elevate the power of dubbing, weaving together the strands of language and music to create a symphony of audiovisual excellence. Experience the unparalleled commitment and craftsmanship that Musica Productions brings to every project, and let us transform your films into masterpieces.</p>
      </div>
    </div>
    
  </div>


  <div style="margin-bottom: 8rem;">
<div class="container d-flex justify-content-center align-items-center w-100">
  <div class="contactus custom-contact d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
      <h4 class="text-primary mb-3">Get in touch</h4>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Email</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your number">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
      </div>
      <div class="col-md-5">
        <h4 style="margin-left: 0.6rem;">Contact us</h4>
        <hr>
        <div class="mt-4">
          <div class="d-flex">
            <i class="bi bi-geo-alt-fill"></i>
            <p>Address: D-16, 'Jayant Smruti', Rajhans Society, <br>
              Nr.Nabard Vihar, Lane Opp. Mohan Hair Dressers, <br> St. Xaviers College Corner, Navrangpura, <br>Ahmedabad, Gujarat 380006</p>
          </div>
          <hr>
          <div class="d-flex">
            <i class="bi bi-telephone-fill"></i>
            <p>Contact: 8888888888</p>
          </div>
          <hr>
          <div class="d-flex">
            <i class="bi bi-envelope-fill"></i>
            <p>Email: musica.productions@gmail.com</p>
          </div>
          <hr>
          <div class="d-flex">
            <i class="bi bi-browser-chrome"></i>
            <p>Website: <a href="https://studiomusica.in" class="text-primary">studiomusica.in</a></p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

   

    



<?php
include 'includes/footer.php';
?>




  




        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script>
  


</script>

</body>
</html>