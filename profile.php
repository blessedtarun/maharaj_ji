<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
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
    font-size: 15px;
    </style>
    
  </head>
  <body>
    <!-- NAVBAR START -->
    <!-- ================================================================================= -->
 <?php include('header.php'); ?>
    <!-- FORM END -->

    <!-- PAYMENT START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    
    
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">UserEmail@gmail.com</span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="First name" value=""></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="Surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter Phone Number" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="Enter Address Line 1" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="Enter Address Line 2" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="Enter Post Code" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">State</label><input type="text" class="form-control" placeholder="Enter State Code" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">Area</label><input type="text" class="form-control" placeholder="Enter Local Area" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="Enter Email ID" value=""></div>
                    <div class="col-md-12" style="margin-top:10px;"><label class="labels">Alternative Mobiel Number</label><input type="text" class="form-control" placeholder="Alternative Mobile Number" value=""></div>
                </div>
                <div class="row mt-3">
                    <h4>Manage Password</h4>
                    <div class="col-md-6"><label class="labels">Old Password</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">Enter New Password</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
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
