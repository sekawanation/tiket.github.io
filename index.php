
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mahika Trans</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="icon.png" type="image/icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="assets/css/common.css">
  <link rel="stylesheet" href="assets/css/login.css">

  <!-- animations -->
  <link rel="stylesheet" href="assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="assets/css/welcome.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- auth -->
  <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body class="scrollbar-hidden">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <h1>Mahika</h1>
        <p>Dongkelan</p>
      </div>
    </div>
    <div class="loader-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- splash-screen end -->

  

    <!-- signin start -->
    <section class="auth signin">
      <div class="heading">
        <h2>Mahika Trans</h2>
        <p>Jl. Ringroad Selatan Dongkelan</p>
      </div>
  
      <div class="form-area auth-form">
          <div>
            <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            
        </form>
			
        </div>
  
      </div>
    </section>
    <!-- signin end -->
  </main>

  <!-- modal start -->
  <div class="modal fade loginSuccessModal modalBg" id="loginSuccess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="assets/svg/check-green.svg" alt="Check">
          <h3>You have logged in successfully</h3>
          <p class="mb-32">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="../home.html" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->
  
  <!-- jquery -->
  <script src="assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

  <!-- swiper -->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>

  <!-- script -->
  <script src="assets/js/script.js"></script>
</body>
</html>