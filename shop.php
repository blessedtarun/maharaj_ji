<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ayurvedic Products</title>
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
    
    <link rel="stylesheet" href="css/newstyle.css" type="text/css"/>
    <link rel="stylesheet" href="shop1.css" />
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

    <?php include('header.php'); ?>
    <!-- NAVBAR END -->

    <!-- PRODUCTS START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <section class="section-products">
      <div class="container">
        
        <div class="row justify-content-center text-center" style="margin-top:25px;margin-bottom:25px;">
          <div class="col-md-8 col-lg-6">
            <div class="header">
              <h3>Shop The Best</h3>
              <h2>Ayurvedic Products</h2>
            </div>
          </div>
        </div>
        
           
        
        
        

        <!-- ////////////////////////////////////////////////////////////////////////// -->
        
        
          <div class="row" style="margin-bottom:30px;">
          
          <?php 
            if(isset($_POST['search']))
            {
                $search = $_POST['search'];
                $sql = "SELECT * FROM product WHERE title LIKE '%$search%' ORDER BY sno DESC ";
                $hes = mysqli_query($con, $sql) or die( mysqli_error($con));
            }
            else
            {
                $sql = "SELECT * FROM product WHERE pp_id='0' ORDER BY sno DESC ";
                $hes = mysqli_query($con, $sql) or die( mysqli_error($con));
            }
            foreach($hes as $row)
              { $th = $row['oprice'];
              
          ?>
          
            <div class="col-lg-3 col-6   aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin-bottom: 10px;">
              <div class="prodct-card" style="margin: 0px;padding: 10px;">
              <a class="nav-link" href='productdetails.php?id=<?php echo $row['sno'] ?>'><img src="<?php echo "./img/".$row['main_image']?>" style="" alt="" /></a>
              <hr />
              <a class="nav-link" href='productdetails.php?id=<?php echo $row['sno'] ?>'><p id="product-title"><?php echo $row['title'] ?></p></a>
              <div class="price">
                <p><?php echo $row['mrp']; ?>/-</p>
                <p><?php echo $row['oprice'] ?>/-</p>
              </div>
              <div class="buttons">
                <a class="nav-link" href='manage_cart.php?car=shop&qty=1&ca=<?php echo $row['sno'];?>&q_price=<?php echo $row['oprice'];?>'><button style="padding: 5px;">Add  Cart</button></a>
                <a class="nav-link" href='manage_cart.php?cart=shop&qty=1&ca=<?php echo $row['sno'];?>&q_price=<?php echo $row['oprice'];?>' type="submit" name="cart"><button style="padding: 5px;background: #cf4520;color:white;">BUY NOW</button></a>
              </div>
            </div>
            </div>
          
          <?php } ?>
          </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->
      </div>
    
    
    
    
    </section>
    

    

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
