<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Orders</title>
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
    <link rel="stylesheet" href="orders.css" />
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
<?php include('header.php'); ?>
<!--End Header -->

    <!-- FORM END -->

    <!-- ORDERS START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <h1 data-aos="slide-up" data-aos-duration="500">Order Process</h1>
    <section class="h-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-10 col-xl-8">
            <div class="card" style="border-radius: 10px">
              <!-- <?php 
                $date = $_GET['date'];
                $oid = $_GET['oid'];
                $total_price = $_GET['t'];
              ?> -->
              <div class="card-body p-4">
                <div
                  class="d-flex justify-content-between align-items-center mb-4"
                >
                <a class="nav-link" href='cart.php'><p
                    class="lead fw-normal mb-0"
                    style="color: #a8729a"
                    data-aos="slide-up"
                    data-aos-duration="700"
                  ><b>
                    Back To Cart</b>
                  </p></a>
                </div>
                <div class="card shadow-0 border mb-4">
                  <div
                    class="card-body"
                    data-aos="slide-up"
                    data-aos-duration="1000"
                  >
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form
                        id="contact-form"
                        name="contact-form"
                        action="checkou.php"
                        method="POST"
                        >
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="fname" class="form-control" required/>
                                    <label for="email" class="">Your First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="lname" class="form-control" required/>
                                    <label for="email" class="">Your Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="section-space"></div>
                        <div class="row">
                            <div class="col-md-12" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="number" id="email" name="mobile" class="form-control" required/>
                                    <label for="email" class="">Your Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="section-space"></div>
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form"  data-aos="slide-up" data-aos-duration="1000" >
                                    <textarea type="text" id="message"  name="address" rows="3" class="form-control md-textarea" required ></textarea>
                                    <label for="message">Your Full Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="section-space"></div>
                        <div class="row">
                            <div class="col-md-6" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="landmark" class="form-control" required/>
                                    <label for="email" class="">Your Landmark</label>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="pincode" class="form-control" required/>
                                    <label for="email" class="">Your Pincode</label>
                                </div>
                            </div>
                        </div>
                        <div class="section-space"></div>
                        <div class="row">
                            <div class="col-md-6" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="city" class="form-control" required/>
                                    <label for="email" class="">Your City</label>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="state" class="form-control" required/>
                                    <label for="email" class="">Your State</label>
                                </div>
                            </div>
                        </div>
                        <div class="section-space"></div>
                        <div class="row">
                            <div class="col-md-12" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="country" class="form-control" required/>
                                    <label for="email" class="">Your Country</label>
                                </div>
                            </div>
                        </div>
                        <div class="section-space"></div>
                        <div class="row">
                            <div class="col-md-12" data-aos="slide-up" data-aos-duration="700">
                                <div class="md-form mb-0">
                                    <select name="pay" class="form-control" required>
                                        <option value="Online">Online</option>
                                        <option value="COD">COD</option>
                                     </select>
                                    
                                    <label for="email" class="">Select Payment Method</label>
                                </div>
                            </div>
                        </div>
                        <?php $total = $_GET['tt']; ?>
                        <input type="hidden" id="email" name="total" value="<?php echo $total; ?>" class="form-control" required/>
                        <div class="section-space"></div>
                        <div class="section-space"></div>
                        <div class="text-center text-md-left">
                            <button type="submit" name="order"  class="btn btn-primary">Make a Payment</button>
                        </div>
                        </form>
                        <div class="status"></div>
                    </div>
                    
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ORDERS END -->
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
