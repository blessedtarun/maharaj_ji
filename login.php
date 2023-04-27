<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/b40e00b257.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <style>
    .nav-item {
    color: #000 !important;
    font-weight: 600 !important;
    font-size: 15px; }
    </style>
    
  </head>
  <body>
    <!-- NAVBAR START -->
    <!-- ================================================================================= -->

      <!-- Start Header-->
      <?php include('header.php'); 
      ob_start();
      if(isset($_REQUEST['login']))
      {
      $name=$_REQUEST['email'];
      $password=$_REQUEST['password'];
      $qu=mysqli_query($con,"select * from user where email='".$name."' AND password='".$password."' AND status='1'")or die(mysqli_error());
      
      $cnt=mysqli_num_rows($qu);
      if($cnt>0)
      {
        $_SESSION['client']=$_REQUEST['email'];
        
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Successfully');
          window.location.href='index.php';
          </script>");
      }
      else
      {
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Invalid Credentials');
          window.location.href='login.php';
          </script>");
          
      $_SESSION['error']='Invalid login';
      }
      }
      ?>
      <!--End Header -->
    <!-- FORM END -->

    <!-- PAYMENT START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    
    <div class="container">
    <h1 data-aos="slide-up" data-aos-duration="500">LOGIN</h1>
    
    <div class="col-sm-12">
    
    <div class="row">
        
    <div class="col-sm-3"></div>
    
    <div class="col-sm-6">
    <div class="login-form" style="margin:0px;">
      <form action="" method="POST">
        <!-- Email input -->
        <div
          class="form-outline mb-4"
          data-aos="slide-up"
          data-aos-duration="700"
        >
          <input type="email" name="email" id="form2Example1" class="form-control" />
          <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div
          class="form-outline mb-4"
          data-aos="slide-up"
          data-aos-duration="900"
        >
          <input type="password" name="password" id="form2Example2" class="form-control" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <!-- <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form2Example31"
                checked
              />
              <label
                class="form-check-label"
                for="form2Example31"
                data-aos="slide-up"
                data-aos-duration="1000"
              >
                Remember me
              </label>
            </div> -->
          </div>

          <!-- <div class="col" data-aos="slide-up" data-aos-duration="1000">
   
            <a href="#!">Forgot password?</a>
          </div> -->
        </div>

        <!-- Submit button -->
        <button
          type="submit"  name="login"
          class="btn btn-primary btn-block mb-4"
          data-aos="slide-up"
          data-aos-duration="1200"
        >
          Sign in
        </button>

        <!-- Register buttons -->
        <div class="text-center" data-aos="slide-up" data-aos-duration="1500">
          <p>Not a member? <a href="signUp.php">Register</a></p>
          <!-- <p>or sign up with:</p> -->
          <!-- <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fa fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fa fa-google"></i>
          </button> -->
        </div>
      </form>
    </div>
    </div>
    
    <div class="col-sm-3"></div>
    
    </div>
    
    </div>
    </div>
    <!-- PFORM END -->
    <div class="section-space"></div>

    <!-- FOOTER START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <?php include 'footer.php';?>
    <!-- FOOTER END -->

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
