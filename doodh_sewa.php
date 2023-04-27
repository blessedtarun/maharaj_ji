<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Doodh Sewa</title>
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
    <link rel="stylesheet" href="gaushala.css" />
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
    
  </head>
  <body>
    <!-- NAVBAR START -->
    <!-- ================================================================================= -->

     <?php include('header.php'); ?>
    <!-- NAVBAR END -->

    <h1 data-aos="slide-up" data-aos-duration="500">Doodh Sewa</h1>

    <div class="section-space"></div>

    <div class="container">
    <p class="guruName" data-aos="slide-up" data-aos-duration="600">
      About Doodh Sewa
    </p>
    </div>
    
    <div class="container" style="padding:25px;">
    <p class="" data-aos="slide-up" data-aos-duration="700">
      All of you will be very happy to know that on the holy land of Vrindavan, many services are going on Shri Radha Kishori Seva Dham Sant Colony Parikrama Marg under the guidance of Guru ji, one of which is milk service.
    </p
    <p>आप सभी को यह जानकर बहुत खुशी होगी कि वृंदावन की पावन धरा पर श्री राधा किशोरी सेवा धाम संत कालोनी परिक्रमा मार्ग पर गुरु जी के मार्गदर्शन में अनेक सेवाएं चल रही हैं, जिनमें से एक है दुग्ध सेवा।</p>
    <p class="" data-aos="slide-up" data-aos-duration="800">
     In this service, every morning, thousands of sadhu saints are fed milk to the poor and destitute, 
     along with milk, breakfast is also arranged for them, and thousands of sadhus are also given dakshina.
    </p>
    <p>इस सेवा में हर सुबह हजारों साधु संतों को गरीबों और निराश्रितों को दूध पिलाया जाता है।
     उनके लिए दूध के साथ नाश्ते की भी व्यवस्था की जाती है और हजारों साधुओं को दक्षिणा भी दी जाती है।</p>
    </div>
    <div class="section-space"></div>

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

    <!-- DOCUMENTS START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <!-- Gallery -->
    
    <p class="guruName">Gallery</p>
    
    
    <div class="container">
    <div class="row">
      <div class="col-6 col-md-4">
        <img
          data-aos="slide-up"
          data-aos-duration="500"
          src="Images/website/dudh_seva/1.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Boat on Calm Water"
        />
        </div>
        
        <div class="col-6 col-md-4">
        <img
          data-aos="slide-up"
          data-aos-duration="600"
          src="Images/website/dudh_seva/2.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Wintry Mountain Landscape"
        />
      </div>

      <div class="col-6 col-md-4">
        <img
          data-aos="slide-up"
          data-aos-duration="700"
          src="Images/website/dudh_seva/3.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Mountains in the Clouds"
        />
      </div>    
        
     <div class="col-6 col-md-4">    
        <img
          data-aos="slide-up"
          data-aos-duration="800"
          src="Images/website/dudh_seva/4.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Boat on Calm Water"
        />
      </div>

      <div class="col-6 col-md-4">
        <img
          data-aos="slide-up"
          data-aos-duration="900"
          src="Images/website/dudh_seva/5.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Waves at Sea"
        />
      </div>
      
        <div class="col-6 col-md-4">
        <img
          data-aos="slide-up"
          data-aos-duration="1000"
          src="Images/website/dudh_seva/6.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Yosemite National Park"
        />
      </div>
    </div>
    </div>
    <!-- Gallery -->
    <!-- DOCUMENTS END -->

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
