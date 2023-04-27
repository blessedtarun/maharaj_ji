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
    <h1 data-aos="slide-up" data-aos-duration="500">Orders</h1>
    <section class="h-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-10 col-xl-8">
            <div class="card" style="border-radius: 10px">
              <div class="card-header px-4 py-5">
                <h5
                  class="text-muted mb-0"
                  data-aos="slide-up"
                  data-aos-duration="600"
                >
                  Thanks for your Order,
                  <span style="color: #a8729a">Hii.. <?php echo $f_name; ?> <?php echo $l_name; ?></span>!
                </h5>
              </div>
              <div class="card-body p-4">
                <div
                  class="d-flex justify-content-between align-items-center mb-4"
                >
                </div>
                <?php 
                    $cat=mysqli_query($con,"select * from order_details WHERE s_email = '$email' AND payment_status='0' ORDER BY sno DESC");
                    while($rc=mysqli_fetch_array($cat))
                    { $o_id = $rc['order_id'];
                      $d_status = $rc['d_status'];
                        
                    $stu11=mysqli_query($con,"select * from `order_p` WHERE order_id='$o_id'");
                    $student11=mysqli_num_rows($stu11);  
                ?>
                <div class="card shadow-0 border mb-4">
                  <div class="card-body"  data-aos="slide-up" data-aos-duration="1000" >
                    <div class="row">
                      <div class="col-md-2">
                      <a class="nav-link" href='invoice.php?oid=<?php echo $rc['order_id']; ?>&date=<?php echo $rc['date']; ?>&t=<?php echo $rc['price']; ?>'><p class="text-muted mb-0"><b>Receipt</b></p></a>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center" >
                        <p class="text-muted mb-0"><b>Order ID : <?php echo $rc['order_id']; ?></b></p>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">Product Qty: <br><?php echo $student11; ?></br></p>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">₹ <?php echo $rc['price']; ?></p>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center" style="background-color: #e0e0e0; opacity: 1">
                        <p class="text-muted mb-0 small">Date : <br><?php echo $rc['date']; ?></br></p>
                      </div>
                    </div>
                    <hr
                      class="mb-4"
                      style="background-color: #e0e0e0; opacity: 1"
                    />
                    <div class="row d-flex align-items-center">
                      <div class="col-md-2">
                        <p class="text-muted mb-0 small">Track Order</p>
                      </div>
                      <div class="col-md-10">
                        <div
                          class="progress"
                          style="height: 6px; border-radius: 16px"
                        >
                        <?php if($d_status=='0') { ?> 
                          <div
                            class="progress-bar" role="progressbar"style=" width: 16%; border-radius: 16px;  background-color: #a8729a;"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                          </div>
                          <?php } elseif($d_status=='1'){ ?>
                          <div
                            class="progress-bar" role="progressbar"style=" width: 40%; border-radius: 16px;  background-color: #a8729a;"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                          </div>
                          <?php } elseif($d_status=='2'){ ?>
                          <div
                            class="progress-bar" role="progressbar"style=" width: 65%; border-radius: 16px;  background-color: #a8729a;"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                          </div>
                          <?php } elseif($d_status=='3'){ ?>
                          <div
                            class="progress-bar" role="progressbar"style=" width: 100%; border-radius: 16px;  background-color: #a8729a;"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                          </div>
                          <?php } ?>
                        </div>
                        <div class="d-flex justify-content-around mb-1">
                          <p class="text-muted mt-1 mb-0 small ms-xl-5">
                            Pending
                          </p>
                          <p class="text-muted mt-1 mb-0 small ms-xl-5">
                            Process
                          </p>
                          <p class="text-muted mt-1 mb-0 small ms-xl-5">
                            Shipped
                          </p>
                          <p class="text-muted mt-1 mb-0 small ms-xl-5">
                            Delivered
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
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
