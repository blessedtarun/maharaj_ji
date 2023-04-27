<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart</title>
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
    font-size: 15px;
    </style>
    
    <script>
    $('.btn-minuse').on('click', function(){
        $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)
})

$('.btn-pluss').on('click', function(){
        $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)
})
    
    </script>
    
  </head>
  <body>
    <!-- NAVBAR START -->
    <!-- ================================================================================= -->

    <?php include('header.php'); ?>

    <!-- FORM END -->

    <!-- ORDERS START -->
   
    <h1 data-aos="slide-up" data-aos-duration="500">My Cart</h1>
    <section class="h-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-10 col-xl-8">
            <div class="card" style="border-radius: 10px">
              
              <div class="card-body p-4">
                <?php
                    $total=0;
                    if(isset($_SESSION['cart']))
                    {
                      foreach($_SESSION['cart'] as $key => $value)
                      {  $sno = $value['pid'];
                        $p_qty = $value['qty'];
                        $price = $value['price'];
                        $tp = $price * $p_qty;
                        $cat=mysqli_query($con,"select * from `product` WHERE sno ='$sno'");
                        while($row=mysqli_fetch_array($cat))
                        {  
                            $qty = $row['qty'];
                            $total=$total+$tp;
                ?>
                <div class="card shadow-0 border mb-4">
                  <div class="card-body" data-aos="slide-up" data-aos-duration="1000" >
                    <div class="row">
                      
                      <div class="col-md-2">
                      <img src="<?php echo "img/".$row['main_image']?>" height=100px;>
                      </div>
                      
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0"><?php echo $row['title'] ?></p>
                      </div>

                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">₹ <?php echo $price ?></p>
                      </div>

                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <div class="input-group" style="width:100%">
                          <form action="cart_item_d.php" method="POST">
                            <span class="input-group-btn">
                              <button name="d_qty_submit" type="submit" class="btn btn-white btn-minuse">-
                                <input type="hidden" name="id" value="<?php echo $row['sno']?>">
                                <input type="hidden" name="qty" value="1">
                              </button>
                            </span>
                            <div>
                              <?php echo $p_qty ?>
                            </div>
                            <span class="input-group-btn">
                              <button name="qty_submit"  type="submit" class="btn btn-red btn-pluss">+
                                <input type="hidden" name="id" value="<?php echo $row['sno']?>">
                                <input type="hidden" name="qty" value="1">
                              </button>
                            </span>
                          </form>    
									      </div><!-- /input-group -->
                      </div>
                      
                      
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">₹ <?php echo $tp ?></p>
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                      <a class="nav-link" href="cart_item_d.php?r_id=<?php echo $row['sno'] ?>">Remove</a>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                <?php } } } ?>
                
              <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                <h7 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0"
                  data-aos="slide-up" data-aos-duration="800">
                  Delivery Charge: <span class="h4 mb-0 ms-2">₹ 120</span>
                </h7>
                
                <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0"
                  data-aos="slide-up" data-aos-duration="800">
                  Total: <span class="h2 mb-0 ms-2">₹ <?php $gg=$total+120; echo $gg ?></span>
                </h5>
                
               <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top:25px;">
                  <a class="btn btn-primary" href="cart_empty.php" style="width: 14%;">Empty Cart</a>
                  <a class="btn btn-primary" href="cart_process.php?tt=<?php echo $gg ?>" style="width: 14%;">CheckOut</a>
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
