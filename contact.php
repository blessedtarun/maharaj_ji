<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
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
    <link rel="stylesheet" href="contact.css" />
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

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
// print_r($name);
// die();
  $sql = "INSERT INTO contact (name,email,subject,message,number)
  VALUES ('$name','$email','$subject','$message','$mobile')";

  $run = mysqli_query($con,$sql);

if($run)
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thank you for connecting with us.');
    </script>");
}
else 
{
  echo "Error: record not Added " ;
}
}
?>
<!--End Header -->
    <!-- NAVBAR END -->

    <!-- FORM START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <div class="formDiv">
      <!--Section: Contact v.2-->
      <section class="mb-4">
        <!--Section heading-->
        <h2
          class="h1-responsive font-weight-bold text-center my-4"
          data-aos="slide-up"
          data-aos-duration="500"
        >
          Contact us
        </h2>
        <!--Section description-->
        <p
          class="text-center w-responsive mx-auto mb-5"
          data-aos="slide-up"
          data-aos-duration="700"
        >
          Do you have any questions? Please do not hesitate to contact us
          directly. Our team will come back to you within a matter of hours to
          help you.
        </p>

        <div class="row">
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
            <form
              id="contact-form"
              name="contact-form"
              action=""
              method="POST"
            >
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div
                  class="col-md-6"
                  data-aos="slide-up"
                  data-aos-duration="500"
                >
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="name"
                      name="name"
                      class="form-control"
                    />
                    <label for="name" class="">Your name</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div
                  class="col-md-6"
                  data-aos="slide-up"
                  data-aos-duration="700"
                >
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="email"
                      name="email"
                      class="form-control"
                    />
                    <label for="email" class="">Your email</label>
                  </div>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
              <div class="section-space"></div>

              <div class="row">
                <div class="col-md-12">
                  <div
                    class="md-form mb-0"
                    data-aos="slide-up"
                    data-aos-duration="900"
                  >
                    <input
                      type="text"
                      id="subject"
                      name="number"
                      class="form-control"
                    />
                    <label for="subject" class="">Mobile Number</label>
                  </div>
                </div>
              </div>

              <div class="section-space"></div>
              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="md-form mb-0"
                    data-aos="slide-up"
                    data-aos-duration="900"
                  >
                    <input
                      type="text"
                      id="subject"
                      name="subject"
                      class="form-control"
                    />
                    <label for="subject" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->
              <div class="section-space"></div>

              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-12">
                  <div
                    class="md-form"
                    data-aos="slide-up"
                    data-aos-duration="1000"
                  >
                    <textarea
                      type="text"
                      id="message"
                      name="message"
                      rows="2"
                      class="form-control md-textarea"
                    ></textarea>
                    <label for="message">Your message</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->
           
              <div class="text-center text-md-left">
                
              <button type="submit" name="submit" 
                  class="btn btn-primary">Submit</button>
                
              </div>
              </form>
            <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
              <li data-aos="slide-up" data-aos-duration="500">
                <i class="fa fa-map-marker-alt fa-2x"></i>
                <p>
                  Sant Shree Indradevji Maharaj Ashram, Shree Radha Kishori
                  Bhakti Sevadham, Near Anand Dham, Parikrama Marg, Vrindavan,
                  Uttar Pradesh – 281121
                </p>
              </li>

              <li data-aos="slide-up" data-aos-duration="700">
                <i class="fa fa-phone mt-4 fa-2x"></i>
                <p>+91-8805970202, +91-9997765941</p>
              </li>

              <li data-aos="slide-up" data-aos-duration="900">
                <i class="fa fa-envelope mt-4 fa-2x"></i>
                <p>rrbsanstha@gmail.com</p>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
      </section>
      <!--Section: Contact v.2-->
    </div>
    <!-- FORM END -->

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
