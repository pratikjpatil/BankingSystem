<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TSF Bank</title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&family=Ubuntu&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <section class="colored-section" id="title">

          <!-- Nav Bar -->
          <?php
          include 'navbar.php';
          ?>


    <div class="container-fluid">
      <!-- Title -->


      <div class="row">


        <div class="col-lg-6">
          <img class="title-image" src="images/phone.png" alt="TSF Bank">
        </div>

        <div class="col-lg-6">
          <h1 class="big-heading">The bank you'll love</h1>
          <p>TSF Bank is The Mobile Bank, helping you manage your bank account on-the-go, track your expenses and set aside money In real-time. Open yours in minutes right from your smartphone or PC, and start transacting without the physical card.</p>
          <a href="transfermoney.php"> <button type="button" class="btn btn-dark btn-lg download-button"> Transfer Money</button></a>
          <!-- <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button> -->
        </div>

      </div>

    </div>
</section>





  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="excluded">
      <a href = "https://www.facebook.com/thesparksfoundation.info/"><i class="social-icon fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/tsfsingapore"><i class="social-icon fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/thesparksfoundation.info/?hl=en"><i class="social-icon fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/company/the-sparks-foundation/"><i class="social-icon fa-brands fa-linkedin"></i></a>

    </div>
    <div class="text-center">
      <p style="color: grey; font-size: 12px;">Made with &hearts; by <b> <a href="https://www.linkedin.com/in/pratikjpatil">Pratik Patil</a></b> </p>
    </div>

  </footer>

  </footer

</body>

</html>
