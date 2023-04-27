<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
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
    <link rel="stylesheet" href="signUp.css" />
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

if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $_SESSION['emm'] = $email;
    	
       
    	$token = bin2hex(random_bytes(3));
    
        
        $emailquery = "select * from user WHERE email = '$email' AND status = '1' ";
        $query = mysqli_query($con,$emailquery);
        
        $emailcount = mysqli_num_rows($query);
        // echo $emailcount;
            if($emailcount>0)
            {?>
            <script>
                alert("This Email Is Already Registered");
            </script>
              
           <?php  }
            else
            {     
                $sql = "INSERT INTO user (fname,lname,email,mobile,password,token,status)
                        VALUES ('$fname','$lname','$email','$mobile','$password','$token','1')";
                $run = mysqli_query($con,$sql);
        
            	if($run)
              {
                echo "<script>alert('Successfully SignUp'); window.location = 'login.php';</script>";
              }
              else
              {
                echo "<script>alert('Re-Try'); window.location = 'signUp.php';</script>";
              }
              
            }
    }
?>
<!--End Header -->
    <!-- FORM END -->

    <!-- PAYMENT START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <h1 data-aos="slide-up" data-aos-duration="500">Create New Account</h1>
    <div class="login-form" style="margin:0px;">
      <section class="">
        <div class="container h-100">
          <div
            class="row d-flex justify-content-center align-items-center h-100"
          >
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      <p
                        class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"
                        data-aos="slide-up"
                        data-aos-duration="600"
                      >
                        Sign up
                      </p>

                      <form action="" method="POST" class="mx-1 mx-md-4">
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                          <div
                            class="form-outline flex-fill mb-0"
                            data-aos="slide-up"
                            data-aos-duration="700"
                          >
                          <div>
                            <input id="form_name5" class="form-control" type="text" name="fname" placeholder="First Name">
                          </div>
                          <div>
                            <input id="form_name5a" class="form-control" type="text" name="lname" placeholder="Last Name">
                          </div>
                            
                            <label class="form-label" for="form3Example1c"
                              >Your Name</label
                            >
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                          <div
                            class="form-outline flex-fill mb-0"
                            data-aos="slide-up"
                            data-aos-duration="800"
                          >
                            <input
                            type="email" name="email"
                              id="form3Example3c"
                              class="form-control"
                            />
                            <label class="form-label" for="form3Example3c"
                              >Your Email</label
                            >
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa fa-lock fa-lg me-3 fa-fw"></i>
                          <div
                            class="form-outline flex-fill mb-0"
                            data-aos="slide-up"
                            data-aos-duration="900"
                          >
                            <input
                            type="password" name="password"
                              id="form3Example4c"
                              class="form-control"
                            />
                            <label class="form-label" for="form3Example4c"
                              >Password</label
                            >
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa fa-key fa-lg me-3 fa-fw"></i>
                          <div
                            class="form-outline flex-fill mb-0"
                            data-aos="slide-up"
                            data-aos-duration="1000"
                          >
                          <input id="form_name6" class="form-control" type="text" name="mobile" placeholder="Moblie no"> 
                            <label class="form-label" for="form3Example4cd"
                              >Mobile Number</label
                            >
                          </div>
                        </div>

                        <!-- <div
                          class="form-check d-flex justify-content-center mb-5"
                        >
                          <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form2Example3c"
                          />
                          <label
                            class="form-check-label"
                            for="form2Example3"
                            data-aos="slide-up"
                            data-aos-duration="600"
                          >
                            I agree all statements in
                            <a href="#!">Terms of service</a>
                          </label>
                        </div> -->

                        <div
                          class="d-flex justify-content-center mx-4 mb-3 mb-lg-4"
                        >
                          <button
                          type="submit" name="submit"
                            class="btn btn-primary btn-lg"
                            data-aos="slide-up"
                            data-aos-duration="800"
                          >
                            Register
                          </button>
                        </div>
                      </form>
                    </div>
                    <div
                      class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"
                    >
                      <img
                        data-aos="slide-up"
                        data-aos-duration="1000"
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid"
                        alt="Sample image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
