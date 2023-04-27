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
              <?php 
                $date = $_GET['date'];
                $oid = $_GET['oid'];
                $total_price = $_GET['t'];
              ?>
              <div class="card-body p-4">
                <div
                  class="d-flex justify-content-between align-items-center mb-4"
                >
                <a class="nav-link" href='orders.php'><p
                    class="lead fw-normal mb-0"
                    style="color: #a8729a"
                    data-aos="slide-up"
                    data-aos-duration="700"
                  ><b>
                    Back To Order's</b>
                  </p></a>
                </div>
                <div class="card shadow-0 border mb-4">
                  <div
                    class="card-body"
                    data-aos="slide-up"
                    data-aos-duration="1000"
                  >
                    <?php 
                        $jsql = "SELECT * FROM order_p WHERE order_id='$oid' ";
                        $jhes = mysqli_query($con, $jsql) or die( mysqli_error($con));
                        foreach($jhes as $jrow)
                        { 
                            $psno = $jrow['p_id'];
                            $qty = $jrow['qty'];

                        $sql = "SELECT * FROM product WHERE sno='$psno' ORDER BY sno DESC LIMIT 5 ";
                        $hes = mysqli_query($con, $sql) or die( mysqli_error($con));
                        foreach($hes as $row)
                        { $th = $row['oprice'];
                        $tt = $th * $qty;
                    ?>
                    <div class="row">
                      <div class="col-md-2">
                        <img src="<?php echo "./img/".$row['main_image']?>" style="height:120px; width:120px;" alt="" />
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center" >
                        <p class="text-muted mb-0"><?php echo $row['title']; ?></p>
                      </div>

                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">₹ <?php echo $th; ?></p>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center" >
                        <p class="text-muted mb-0 small">Qty: <?php echo $jrow['qty']; ?></p>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small"><b>Total</b> <br>₹ <?php echo $tt; ?></br></p>
                      </div>
                    </div>
                    <?php } } ?>
                    
                  </div>
                </div>

                <div
                  class="d-flex justify-content-between pt-2"
                  data-aos="slide-up"
                  data-aos-duration="500"
                >
                  <p class="fw-bold me-4">Order Id : <?php echo $oid; ?></p>
                </div>

                <div
                  class="d-flex justify-content-between"
                  data-aos="slide-up"
                  data-aos-duration="500"
                >
                  <p class="text-muted mb-0">Invoice Date : <?php echo $date; ?></p>
                  <!-- <p class="text-muted mb-0">
                    <span class="fw-bold me-4">GST 18%</span> 123
                  </p> -->
                </div>

                <div
                  class="d-flex justify-content-between mb-5"
                  data-aos="slide-up"
                  data-aos-duration="500"
                >
                  <p class="text-muted mb-0">
                    <span class="fw-bold me-4">Delivery Charges : 120</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer border-0 px-4 py-5"
                style="
                  background-color: #a8729a;
                  border-bottom-left-radius: 10px;
                  border-bottom-right-radius: 10px;
                "
              >
                <h5
                  class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0"
                  data-aos="slide-up"
                  data-aos-duration="800"
                >
                  Total : <span class="h2 mb-0 ms-2">₹ <?php echo $total_price; ?></span>
                </h5>
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
