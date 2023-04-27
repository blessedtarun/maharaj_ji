<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sant Indradev Maharaj</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script
      src="https://kit.fontawesome.com/b40e00b257.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/newstyle.css" type="text/css"/>
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <style>
    .p{width:100%;}
    </style>
    
    <style>
    .nav-item {
    color: #000 !important;
    font-weight: 600 !important;
    font-size: 15px; }
    </style>
    
    
    
  </head>
  <body>
      <div id="content-to-hide">
    <!-- NAVBAR START -->
    <!-- ================================================================================= -->

  
    <?php include('header.php'); ?>
    <!-- NAVBAR END -->

    <!-- IMAGE CAROUSEL START -->
    <!-- ==================================================================================== -->

    <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
       <!--Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="3"
        ></button>
      </div>

       <!--The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="Images/slider-1.png" class="d-block w-100 main-slider"  />
          <!--<div class="carousel-caption">-->
          <!--  <h3>Sant Indradev Maharaj</h3>-->
          <!--  <p>With VIPs</p>-->
          <!--</div>-->
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="Images/slider-2.jpg" class="d-block w-100"  />
          <!--<div class="carousel-caption">-->
          <!--  <h3>Sant Indradev Maharaj</h3>-->
          <!--  <p>So many kinds of sewa</p>-->
          <!--</div>-->
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="Images/slider-3.jpg" alt="New York" class="d-block w-100"  />
          <!--<div class="carousel-caption">-->
          <!--  <h3>Sant Indradev Maharaj</h3>-->
          <!--  <p>Visiting vridhashram to meet people</p>-->
          <!--</div>-->
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="Images/slider-4.jpg" alt="New York" class="d-block w-100"  />
          <!--<div class="carousel-caption">-->
          <!--  <h3>Sant Indradev Maharaj</h3>-->
          <!--  <p>Live Katha</p>-->
          <!--</div>-->
        </div>
      </div>

       <!--Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
     <!--IMAGE CAROUSEL END -->
    
<!--    <div id="carouselExampleCaptions"  class="carousel slide" data-bs-ride="carousel" style="display:none;">-->
<!--  <div class="carousel-indicators">-->
<!--    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
<!--    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
<!--    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
<!--  </div>-->
<!--  <div class="carousel-inner">-->
<!--    <div class="carousel-item active">-->
<!--      <img src="Images/slider-1.png" class="d-block w-100" style="height:300px;">-->
<!--      <div class="carousel-caption  d-md-block">-->
<!--        <h5>First slide label</h5>-->
<!--        <p>Some representative placeholder content for the first slide.</p>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--      <img src="Images/slider-2.jpg" class="d-block w-100" style="height:300px;">-->
<!--      <div class="carousel-caption  d-md-block">-->
<!--        <h5>Second slide label</h5>-->
<!--        <p>Some representative placeholder content for the second slide.</p>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--      <img src="Images/slider-3.jpg" class="d-block w-100" style="height:300px;">-->
<!--      <div class="carousel-caption  d-md-block">-->
<!--        <h5>Third slide label</h5>-->
<!--        <p>Some representative placeholder content for the third slide.</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">-->
<!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--    <span class="visually-hidden">Previous</span>-->
<!--  </button>-->
<!--  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">-->
<!--    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--    <span class="visually-hidden">Next</span>-->
<!--  </button>-->
<!--</div>-->
    
    
    <div class="section-space"></div>

    <!-- VIP SECTION START -->
    <!-- ======================================================================= -->
    <h2>Maharaj Ji With Sadhu Sant</h2>
    <div class="container-fluid">
    <marquee behavior="" direction=""
      ><img 
        src="Images/website/vip/1.jpg"
        alt="" /><img
        src="Images/website/vip/2.jpg"
        alt="" /><img
        src="Images/website/vip/3.jpg"
        alt="" />
        <img
        src="Images/website/vip/4.jpg"
        alt="" />
        <img
        src="Images/website/vip/5.jpg"
        alt="" />
        <img
        src="Images/website/vip/6.jpg"
        alt="" />
        <img
        src="Images/website/vip/7.jpg"
        alt="" />
        <img
        src="Images/website/vip/8.jpg"
        alt="" />
        <img
        src="Images/website/vip/9.jpg"
        alt="" />
        <img
        src="Images/website/vip/10.jpg"
        alt="" />
        <img
        src="Images/website/vip/11.jpg"
        alt="" />
        <img
        src="Images/website/vip/12.jpg"
        alt="" />
        <img
        src="Images/website/vip/13.jpg"
        alt="" />
        <img
        src="Images/website/vip/14.jpg"
        alt="" />
        <img
        src="Images/website/vip/15.jpg"
        alt="" />
        <img
        src="Images/website/vip/16.png"
        alt="" />
        <img
        src="Images/website/vip/17.jpg"
        alt="" />
        <img
        src="Images/website/vip/18.jpg"
        alt="" />
        <img
        src="Images/website/vip/19.jpeg"
        alt="" />
        <img
        src="Images/website/vip/20.jpeg"
        alt="" />
        </marquee>
    </div>
    <!-- VIP SECTION END -->
    <div class="section-space"></div>

    <!-- SEVA SECTION START -->
    <!-- ======================================================================= -->
    <h2 style="text-align: center;">Social Service / Seva Prakalps</h2>
    <div class="section-space"></div>
    
    <div class="container">
    
    <div class="col-sm-12"> 
    <div class="row">
      
      
      
      <div class="col-sm-6 y1" style="padding:15px;">
      <div class="seva-details float-end" style="width:100%;" data-aos="slide-up" data-aos-duration="400">
        <h3>Vridhashram</h3>
        <p>
          हमारा आश्रम कई वृद्ध लोगों का घर है। गुरुजी सोचते हैं कि हर कोई एक अच्छा जीवन जीने का हकदार है। उनके अग्र श्री इन्द्रदेवजी महाराज अनेक वृद्धों का उत्तरदायित्व उठाते हैं। यह सुनिश्चित करना कि उन्हें उचित भोजन, उचित स्वास्थ्य देखभाल सेवाएं और रहने के लिए एक शांतिपूर्ण जगह मिले।
        </p>
        <a href="vridhashram.php" class="btn">Read More</a>
      </div>
      </div>
      
      <div class="col-sm-6 y1" style="padding:15px;">    
      <img src="Images/website/vridha_ashram/6.jpg" style="width:100%;" class="seva-img float-start" data-aos="slide-up" data-aos-duration="200"/>
      </div>
      
    </div>  
    </div>
    
    </div>
    
    <div class="container">
      <div class="col-sm-12">
      <div class="row">
       
      <div class="col-sm-6 order-sm-first order-last" style="padding:15px;">      
      <img src="Images/website/gau_seva/15.JPG" style="width:100%;" class="seva-img float-end" data-aos="slide-up" data-aos-duration="500"/>
      </div>
      
      <div class="col-sm-6" style="padding:15px;">
      <div class="seva-details float-start" style="width:100%;"  data-aos="slide-up" data-aos-duration="1000">
        <h3>Gaushala</h3>
        <p>
          हमारे ट्रस्ट का मिशन असहाय और घायल गौ माता को मुफ्त चिकित्सा उपचार प्रदान करने के लिए गौ सेवा और डिजिटल अस्पताल है। इस संबंध में और गौ माता की पीड़ा को समझ रहे हैं। श्री इंद्रदेवजी महाराज की अध्यक्षता में।
        </p>
        <a href="gaushala.php" class="btn">Read More</a>
      </div>
      </div>
      
      </div>
      </div>
      
    </div>
    
    
    <div class="container">
    <div class="col-sm-12">   
    <div class="row">
      
      
      
      <div class="col-sm-6" style="padding:15px;">
      <div class="seva-details float-end" style="width:100%;" data-aos="slide-up" data-aos-duration="1000">
        <h3>Nadi Parikshan</h3>
        <p>
          नाड़ी निदान आयुर्वेद, पारंपरिक चीनी चिकित्सा, पारंपरिक मंगोलियाई चिकित्सा, सिद्ध चिकित्सा, पारंपरिक तिब्बती चिकित्सा और यूनानी में उपयोग की जाने वाली एक नैदानिक ​​तकनीक है।
        </p>
        <a href="nadi_parikshan.php" class="btn">Read More</a>
      </div>
      </div>
      
      <div class="col-sm-6" style="padding:15px;">    
      <img src="Images/website/nadi_parikshan/2.jpg" style="width:100%;" class="seva-img float-start" data-aos="slide-up" data-aos-duration="500"/>
      </div>
      
    </div>
    </div>
    </div>
    
    
    <div class="container">
    <div class="col-sm-12">  
    <div class="row">  
    
    <div class="col-sm-6 order-sm-first order-last" style="padding:15px;">
    <img src="Images/website/dudh_seva/1.JPG" style="width:100%;" class="seva-img float-end" data-aos="slide-up" data-aos-duration="500"/>
    </div>
      
    <div class="col-sm-6" style="padding:15px;">  
      <div class="seva-details float-start" style="width:100%;" data-aos="slide-up" data-aos-duration="1000">
        <h3>Doodh Seva</h3>
        <p>
          आप सभी को यह जानकर बहुत खुशी होगी कि वृंदावन की पावन धरा पर श्री राधा किशोरी सेवा धाम संत कालोनी परिक्रमा मार्ग पर गुरु जी के मार्गदर्शन में अनेक सेवाएं चल रही हैं, जिनमें से एक है दुग्ध सेवा।
        </p>
        <a href="doodh_sewa.php" class="btn">Read More</a>
      </div>
    </div>  
      
    </div>  
    </div>
    </div>
    
    
    <div class="container">
    <div class="col-sm-12"> 
    <div class="row">
    
    
    <div class="col-sm-6" style="padding:15px;">  
      <div class="seva-details float-end" style="width:100%;" data-aos="slide-up" data-aos-duration="1000">
        <h3>Bhandara</h3>
        <p>
          आश्रम अन्नदान का गैर-लाभकारी संगठनात्मक दान चलाता है जो समय-समय पर सैकड़ों लोगों को भोजन परोसता है। अन्नदान दैनिक आधार पर चलता है, जहाँ सभी को उचित और स्वस्थ भोजन मिलता है। आश्रम में प्रतिदिन 700 से अधिक लोग भोजन प्रसाद ग्रहण करते हैं जो आश्रम भोजनालय में तैयार किया जाता है। प्रसाद भोजन तैयार करने के लिए स्वच्छता के सभी उपाय किए जाते हैं क्योंकि यह सख्ती से वैष्णव है।
        </p>
        <a href="bhandara.php" class="btn">Read More</a>
      </div>
    </div>  
    
    <div class="col-sm-6" style="padding:15px;">
      <img src="Images/website/bhandara_seva/4.png" style="width:100%;" class="seva-img float-start" data-aos="slide-up" data-aos-duration="500" />
    </div>  
    
    
    </div>
    </div>
    </div>
    
    
    <div class="container">
    <div class="col-sm-12"> 
    <div class="row">
    
    <div class="col-sm-6 order-sm-first order-last" style="padding:15px;">    
      <img src="Images/website/bandar_seva/8.jpg" style="width:100%;" class="seva-img float-end" data-aos="slide-up"  data-aos-duration="500" />
    </div>
    
    <div class="col-sm-6" style="padding:15px;">
      <div class="seva-details float-start" style="width:100%;" data-aos="slide-up" data-aos-duration="1000">
        <h3>Bandar Seva</h3>
        <p>
          हमारे आश्रम में, हम मानते हैं कि बंदर सेवा साधना का एक अनिवार्य पहलू है। यह हमें प्राप्त आशीर्वादों और समाज को वापस देने का अवसर के लिए आभार व्यक्त करने का एक तरीका है।
        </p>
        <a href="bandar_sewa.php" class="btn">Read More</a>
      </div>
    </div>
    
    </div>  
    </div>
    </div>
    
    <div class="container">
    <div class="col-sm-12"> 
    <div class="row">
      
      
      
      <div class="col-sm-6" style="padding:15px;">
      <div class="seva-details float-end" style="width:100%;" data-aos="slide-up" data-aos-duration="1000">
        <h3>Plantation</h3>
        <p>
          पर्यावरण की देखभाल के लिए आश्रम ने ग्लोबल वार्मिंग, बारिश की कमी जैसे मुद्दों से लड़ने के लिए कई पौधे और पेड़ लगाए हैं। जैविक खेती इसका एक अहम हिस्सा है। आश्रम में कई आयुर्वेदिक पौधे लगाए गए हैं।
        </p>
        <a href="plantation.php" class="btn">Read More</a>
      </div>
      </div>
      
      <div class="col-sm-6" style="padding:15px;">    
      <img src="Images/website/plantation/6.jpg" style="width:100%;" class="seva-img float-start" data-aos="slide-up" data-aos-duration="500"/>
      </div>
      
    </div>
    </div>
    </div>

    <!-- SEVA SECTION END -->

    <!-- DONATE BUTTON START -->
    <!-- ///////////////////////////////////////////////////////////////// -->
    <div class="section-space"></div>
    <div
      class="mt-4 p-5 rounded donateSection"
      data-aos="slide-up"
      data-aos-duration="1000"
    >
      <p>Donate to help Aashram</p>
      <a href="donat.php" class="btn">Donate Here</a>
    </div>
    <div class="section-space"></div>
    <!-- DONATE BUTTON END -->
    
    <!--AGAMI KATHA START-->
    
     <div class="container" data-aos="slide-up"
      data-aos-duration="1000">
    <h2>Agami Katha</h2>
    </div>
    <div class="container" style="display: flex; justify-content: center;" data-aos="slide-up"
      data-aos-duration="1200"><img src="Images/agami_katha.jpg" style="width: 80vw"></div>
    
    <div class="section-space"></div>
    
    <!--AGAMI KATHA END-->

    <!-- PRODUCT SECTION START -->
    <!-- ================================================================================== -->

    
    <div class="container-fluid" style="height:100%;">
      <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-6 position-absolute top-50 start-0 translate-middle" style="transform: translate(0%,34%)!important;position: relative!important;margin-bottom:50px;">
          <h1 class="producthead" style="text-align: center;
    color: #cf4520;
    font-weight: bold;font-size: 3em;margin-bottom:20px;
    " data-aos="slide-up" data-aos-duration="1000">
            Premium<br />Products
          </h1>
        </div>
        <div class="col-sm-6">
        <div class="row"> 
        
        <div class="col-sm-6">
          <div class="product-property1" data-aos="slide-up" data-aos-duration="1000">
            <i class="fa fa-solid fa-droplet"></i>
            <h3>100% Ayurvedic<br />Products</h3>
            <p>
              Ayurvedic medicine is one of the world's oldest medical systems and remains one of India's traditional health care systems. 
            </p>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="product-property2" data-aos="slide-up" data-aos-duration="1000">
            <i class="fa fa-solid fa-seedling"></i>
            <h3>Quality<br />Manufacturing</h3>
            <p>
              All products made by professionals with all the necessary certification. All precautions are taken carefully and no animals are harmed.
            </p>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="product-property3" data-aos="slide-up" data-aos-duration="1000">
            <i class="fa fa-solid fa-flask"></i>
            <h3>Extraction</h3>
            <p>
              Raw material for ayurvedic products are extracted carefully by trained people and no animals are harmed in the process.
            </p>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="product-property4" data-aos="slide-up" data-aos-duration="1000">
            <i class="fa fa-solid fa-industry"></i>
            <h3>Organic</h3>
            <p>
              Every single product is completely organic. No added chemicals that can harm you in any way.
            </p>
          </div>
        </div>  
        </div>
        </div>
      </div>
      </div>
    </div>

    <div class="section-space"></div>
    <div class="container-fluid">
      <div class="row products-row">
        
        <?php 
            $sql = "SELECT * FROM product WHERE pp_id='1' ORDER BY sno DESC LIMIT 5 ";
            $hes = mysqli_query($con, $sql) or die( mysqli_error($con));
            foreach($hes as $row)
            { $th = $row['oprice'];
        ?>
        
          <div class="col-lg-2 col-6" data-aos="slide-up" data-aos-duration="200" style="margin-bottom:10px;">
            <div class="prodct-card" style="border: 2px solid gray;
    border-radius: 25px;
    background: white;
    height: 100%;
    width: 100%;margin: 0px;padding:10px;">
            <a class="nav-link" href='productdetails.php?id=<?php echo $row['sno'] ?>'><img src="<?php echo "./img/".$row['main_image']?>" alt="" /></a>
            <hr />
            <a class="nav-link" href='productdetails.php?id=<?php echo $row['sno'] ?>' style="color:black;"><p id="product-title"><?php echo $row['title'] ?></p></a>
            <div class="price">
              <p style="color:black;"><?php echo $row['mrp']; ?>/-</p>
              <p><?php echo $row['oprice'] ?>/-</p>
            </div>
            <div class="buttons">
              <input type="hidden" name="qty" value="1" step="1"/>
              <input type="hidden" name="ca" value="<?php echo $row['sno'];?>">
              <input type="hidden" name="q_price" value="<?php echo $row['oprice'];?>">
              <a class="nav-link" href='manage_cart.php?car=index&qty=1&ca=<?php echo $row['sno'];?>&q_price=<?php echo $row['oprice'];?>' > <button style="padding: 5px;">Add  Cart</button></a>
              <a class="nav-link" href='manage_cart.php?cart=index&qty=1&ca=<?php echo $row['sno'];?>&q_price=<?php echo $row['oprice'];?>' type="submit" name="cart"><button style="padding: 5px;background: #cf4520;
    color: white;">BUY NOW</button></a>
                
            </div>
          </div>
          </div>
        
        <?php } ?>

        <div class="col-lg-2 col-6 prodct-card" style="margin: 0px;">
        <a class="nav-link" href='shop.php' style="text-align: center"><h3>View All</h3>

          <i class="fa fa-solid fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <!-- PRODUCT SECTION END -->

    <div class="section-space"></div>

    <!-- VIDEO SLIDER START -->
    <!-- /////////////////////////////////////////////////////////////////////////// -->
    <div class="container">
    <h2>YouTube Videos</h2>
    </div>
    
    <div class="container-fluid">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://www.youtube.com/watch?v=NnIJNTfTUhA" target="_blank"
            ><img
              src="Images/YT_Slider/1.png"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
        <div class="carousel-item">
          <a href="https://www.youtube.com/watch?v=DIUWioxNRng" target="_blank"
            ><img
              src="Images/YT_Slider/2.png"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
        <div class="carousel-item">
          <a href="https://www.youtube.com/watch?v=CLxDXFStomo" target="_blank"
            ><img
              src="Images/YT_Slider/3.png"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    </div>

    <!-- VIDEO SLIDER END -->

    <!--<div class="section-space"></div>-->
    <!--<div class="section-space"></div>-->

    <!-- BHAJAN SLIDER START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    
<!--    <div class="container" style="display: flex; justify-content: center;">-->
<!--  <img src="Images/banner.png" alt="Banner">-->
<!--</div>-->

    <!-- BHAJAN SLIDER END -->
    </div>

    <div class="section-space"></div>
    <div class="section-space"></div>

    <!-- KATHA SLIDER START -->
    <!-- /////////////////////////////////////////////////////////////////////////// -->
    <div class="container">
    <h2>BHAJAN</h2>
    </div>
    
    
   <div class="container-fluid">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="3"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://www.youtube.com/watch?v=KnnQ6WlXBRA&ab_channel=SantIndradevjiMaharaj" target="_blank"
            ><img
              src="Images/bhajan/1.jpg"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
        <div class="carousel-item">
          <a href="https://www.youtube.com/watch?v=Lox9GbXn6wM&ab_channel=SantIndradevjiSpiritual" target="_blank"
            ><img
              src="Images/bhajan/2.jpg"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
        <div class="carousel-item">
          <a href="https://www.youtube.com/watch?v=P1VgtY0QBIc&ab_channel=SantIndradevjiSpiritual" target="_blank"
            ><img
              src="Images/bhajan/3.jpg"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
        <div class="carousel-item">
          <a href="https://www.youtube.com/watch?v=thVDgt7-oTA&ab_channel=SantIndradevjiSpiritual" target="_blank"
            ><img
              src="Images/bhajan/4.jpg"
              alt="Los Angeles"
              class="d-block w-100"
          /></a>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    </div>
    
    
    <!-- KATHA SLIDER END -->

    <div class="section-space"></div>
    <div class="section-space"></div>

    <!-- MOTIVATION SLIDER START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <div class="container-fluid">
    <marquee behavior="" direction=""
      ><img
        src="Images/website/slider/1.jpg"
        alt="" /><img
        src="Images/website/slider/2.jpg"
        alt="" /><img
        src="Images/website/slider/3.jpg"
        alt="" /><img
        src="Images/website/slider/4.webp"
        alt="" /><img
        src="Images/website/slider/5.png"
        alt="" /><img
        src="Images/website/slider/6.png"
        alt="" /><img
        src="Images/website/slider/7.png"
        alt="" /><img
        src="Images/website/slider/8.png"
        alt="" /><img
        src="Images/website/slider/9.png"
        alt="" /><img
        src="Images/website/slider/10.png"
        alt="" /><img
        src="Images/website/slider/11.png"
        alt="" /><img
        src="Images/website/slider/12.png"
        alt="" /><img
        src="Images/website/slider/13.png"
        alt="" /><img
        src="Images/website/slider/14.jpg"
        alt="" /><img
        src="Images/website/slider/15.png"
        alt=""
    /></marquee>
    </div>
    <!-- MOTIVATION SLIDER END -->

    <div class="section-space"></div>

    <!-- SOCIAL MEDIA START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <div class="">
    <h3 style="text-align:center;">Connect with us on social media</h3>
    <div class="social-icons" style="padding:15px;">
      
      <a href="https://www.facebook.com/officialindradevjimaharaj" target="_blank" data-aos="slide-up" data-aos-duration="200"
        ><img src="Images/social-icons/Logo 1.png" alt=""
      /></a>
      <a href="" data-aos="slide-up" target="_blank" data-aos-duration="400"
        ><img src="Images/social-icons/Logo 2.png" alt=""
      /></a>
      <a href="https://www.instagram.com/santindradevjimaharaj/" target="_blank" data-aos="slide-up" data-aos-duration="600"
        ><img src="Images/social-icons/Logo 3.png" alt=""
      /></a>
      <a href="https://www.youtube.com/@santindradevjimaharaj" target="_blank" data-aos="slide-up" data-aos-duration="800"
        ><img src="Images/social-icons/Logo 4.png" alt=""
      /></a>
      <a href="https://www.kooapp.com/profile/Sant_Indradevji_Maharaj" target="_blank" data-aos="slide-up" data-aos-duration="1000"
        ><img src="Images/social-icons/Logo 5.png" alt=""
      /></a>
      <a href="https://twitter.com/SantIndradevji" data-aos="slide-up" target="_blank" data-aos-duration="1200"
        ><img src="Images/social-icons/Logo 6.png" alt=""
      /></a>
    </div>
    </div>
    <!-- SOCIAL MEDIA END -->

    <!-- FOOTER START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <?php include 'footer.php';?>
    <!-- FOOTER END -->
    </div>
    
    <script>
  // Set a timer for 1 minute (60,000 milliseconds)
  setTimeout(function() {
    // Get the element with the id "content-to-hide"
    var element = document.getElementById("content-to-hide");
    // Hide the element by setting its display property to "none"
    element.style.display = "none";
  }, 10000);
</script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
  </body>
</html>