<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Orders</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/b40e00b257.js"
      crossorigin="anonymous"
    ></script>
    
    <link rel="stylesheet" href="shop.css" />
    <link rel="stylesheet" href="orders.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <script>
    function changeImage(element) {

              var main_prodcut_image = document.getElementById('main_product_image');
              main_prodcut_image.src = element.src;
              
        
        }
    </script>
    
    <style>
    
    .btn:first-child:hover, :not(.btn-check)+.btn:hover {
    
    color: black;}
    
    .card{border: none;overflow: hidden}.thumbnail_images ul{list-style: none;justify-content: center;display: flex;align-items: center;margin-top:10px}.thumbnail_images ul li{margin: 5px;padding: 10px;border: 2px solid #eee;cursor: pointer;transition: all 0.5s}.thumbnail_images ul li:hover{border: 2px solid #000}.main_image{display: flex;justify-content: center;align-items: center;border-bottom: 1px solid #eee;height: 400px;width: 100%;overflow: hidden}.heart{height: 29px;width: 29px;background-color: #eaeaea;border-radius: 50%;display: flex;justify-content: center;align-items: center}.content p{font-size: 12px}.ratings span{font-size: 14px;margin-left: 12px}.colors{margin-top: 5px}.colors ul{list-style: none;display: flex;padding-left: 0px}.colors ul li{height: 20px;width: 20px;display: flex;border-radius: 50%;margin-right: 10px;cursor: pointer}.colors ul li:nth-child(1){background-color: #6c704d}.colors ul li:nth-child(2){background-color: #96918b}.colors ul li:nth-child(3){background-color: #68778e}.colors ul li:nth-child(4){background-color: #263f55}.colors ul li:nth-child(5){background-color: black}.right-side{position: relative}.search-option{position: absolute;background-color: #000;overflow: hidden;align-items: center;color: #fff;width: 200px;height: 200px;border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;left: 30%;bottom: -250px;transition: all 0.5s;cursor: pointer}.search-option .first-search{position: absolute;top: 20px;left: 90px;font-size: 20px;opacity: 1000}.search-option .inputs{opacity: 0;transition: all 0.5s ease;transition-delay: 0.5s;position: relative}.search-option .inputs input{position: absolute;top: 200px;left: 30px;padding-left: 20px;background-color: transparent;width: 300px;border: none;color: #fff;border-bottom: 1px solid #eee;transition: all 0.5s;z-index: 10}.search-option .inputs input:focus{box-shadow: none;outline: none;z-index: 10}.search-option:hover{border-radius: 0px;width: 100%;left: 0px}.search-option:hover .inputs{opacity: 1}.search-option:hover .first-search{left: 27px;top: 25px;font-size: 15px}.search-option:hover .inputs input{top: 20px}.search-option .share{position: absolute;right: 20px;top: 22px}.buttons .btn{height: 50px;width: 150px;border-radius: 0px !important}
    
    .nav-item {
    color: #000 !important;
    font-weight: 600 !important;
    font-size: 15px;
    }
    </style>
    
  </head>
  <body>
    <!-- NAVBAR START -->
    <!-- ================================================================================= -->
    <?php include('header.php'); 
    $gid = $_GET['id'];
    ?>
    <!-- FORM END -->

    <!-- ORDERS START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <?php 
        $sql = "SELECT * FROM product WHERE sno='$gid' ";
        $hes = mysqli_query($con, $sql) or die( mysqli_error($con));
        foreach($hes as $row)
        { $th = $row['oprice'];
          $images = explode('$',$row['image']);
    ?>
   <div class="container-fluid">
    <div class="col-sm-12">
      <div class="container mt-5 mb-5">
        <div class="card">	
          <form action="manage_cart.php" method="GET">
            <div class="row g-0">
              <div class="col-md-6">
                <div class="d-flex flex-column justify-content-center">	
                  <div class="main_image" style="border:none;height:250px;">
                    <?php
                    foreach($images as $value)
                    {
                    ?>
                      <li><img src="<?php echo "img/".$value ?>" alt="img" width="350"></li>	
                    <?php } ?>  
                 
                  </div>
                  <div class="thumbnail_images">
                    <ul id="thumbnail" style="text-align:center;padding-left:0px;">
                    <?php
                    foreach($images as $value)
                    {
                    ?>
                      <li><img src="<?php echo "img/".$value ?>" alt="img" width="70"></li>	
                    <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="p-3 right-side">
                  <div class="d-flex justify-content-between align-items-center">	
                  <h3><?php echo $row['title'] ?></h3>
                  </div>	
                
                  <!-- <h3 style="text-decoration: line-through;font-size: 20px;font-weight: 800;"> INR 430.99</h3> -->
                
                  <h3 style="color: green;font-size: 20px;font-weight: 800;"> <?php echo $th; ?>/-</h3>
                  <p>Price Include GST</p>
                  <div class="mt-2 pr-3 content">	
                    <p style="font-size: 16px;"><?php echo $row['details'] ?></p>
                  </div>	
                  <div class="buttons d-flex flex-row mt-5 gap-3">
                    <input type="hidden" name="qty" value="1" step="1"/>
                    <input type="hidden" name="ca" value="<?php echo $row['sno'];?>">
                    <input type="hidden" name="q_price" value="<?php echo $row['oprice'];?>">
                    <button type="submit" name="cart" class="btn btn-outline-dark">Buy Now</button>
                    <button type="submit" name="dcar" value='productdetails' class="btn btn-dark">Add to Cart</button>
                  </div>	
                </div>
              </div>	

            </div>	
          </form>
        </div> 
      </div>   
    </div>       
   </div>       
    <?php } ?>
    <!-- ORDERS END -->
    <div class="section-space"></div>
    
    <!-- <h3 style="text-align:center;font-size:30px;">Related Products</h3>
    
    <section class="section-products" style="padding: 36px 0 54px;">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-8 col-lg-6"></div>
        </div>

        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12" style="margin-bottom:30px;">
           
        <div class="col prodct-card aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin: 8px 9px;">
          <img src="https://m.media-amazon.com/images/I/71yvfec512L._SX679_.jpg" alt="">
          <hr>
          <p id="product-title">Random Product Title</p>
          <div class="price">
            <p>499/-</p>
            <p>299/-</p>
          </div>
          <div class="buttons">
            <button style="padding: 5px;">Add to Cart</button><button style="padding: 5px;">BUY NOW</button>
          </div>
        </div>
        
        
            
        <div class="col prodct-card aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin: 8px 9px;">
          <img src="https://m.media-amazon.com/images/I/71yvfec512L._SX679_.jpg" alt="">
          <hr>
          <p id="product-title">Random Product Title</p>
          <div class="price">
            <p>499/-</p>
            <p>299/-</p>
          </div>
          <div class="buttons">
            <button style="padding: 5px;">Add to Cart</button><button style="padding: 5px;">BUY NOW</button>
          </div>
        </div>
            
        <div class="col prodct-card aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin: 8px 9px;">
          <img src="https://m.media-amazon.com/images/I/71yvfec512L._SX679_.jpg" alt="">
          <hr>
          <p id="product-title">Random Product Title</p>
          <div class="price">
            <p>499/-</p>
            <p>299/-</p>
          </div>
          <div class="buttons">
            <button style="padding: 5px;">Add to Cart</button><button style="padding: 5px;">BUY NOW</button>
          </div>
        </div>
            
        <div class="col prodct-card aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin: 8px 9px;">
          <img src="https://m.media-amazon.com/images/I/71yvfec512L._SX679_.jpg" alt="">
          <hr>
          <p id="product-title">Random Product Title</p>
          <div class="price">
            <p>499/-</p>
            <p>299/-</p>
          </div>
          <div class="buttons">
            <button style="padding: 5px;">Add to Cart</button><button style="padding: 5px;">BUY NOW</button>
          </div>
        </div>
            
        <div class="col prodct-card aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin: 8px 9px;">
          <img src="https://m.media-amazon.com/images/I/71yvfec512L._SX679_.jpg" alt="">
          <hr>
          <p id="product-title">Random Product Title</p>
          <div class="price">
            <p>499/-</p>
            <p>299/-</p>
          </div>
          <div class="buttons">
            <button style="padding: 5px;">Add to Cart</button><button style="padding: 5px;">BUY NOW</button>
          </div>
        </div>
        
        <div class="col prodct-card aos-init aos-animate" data-aos="slide-up" data-aos-duration="200" style="margin: 8px 9px;">
          <img src="https://m.media-amazon.com/images/I/71yvfec512L._SX679_.jpg" alt="">
          <hr>
          <p id="product-title">Random Product Title</p>
          <div class="price">
            <p>499/-</p>
            <p>299/-</p>
          </div>
          <div class="buttons">
            <button style="padding: 5px;">Add to Cart</button><button style="padding: 5px;">BUY NOW</button>
          </div>
        </div>
          </div>
        
      </div>
    </section> -->

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
