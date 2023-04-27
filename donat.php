
<?php include('config.php'); 
ob_start();
session_start();
?>

<?php 
if(isset($_POST['order']))
{ 
    $total=round($_POST['amount']);
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $d1=$_POST['d1'];
    date_default_timezone_set('Asia/Kolkata');
    $date =  date('d-m-Y');
    $s_email = $_SESSION['client'];
    $sql = "INSERT INTO donation (email,mobile,name,amount,status,date,d1)
    VALUES ('$s_email','$mobile','$name','$total','0','$date','$d1')";
    $run = mysqli_query($con,$sql);
    if($run)
	{
        echo"
            <script>
                var name='$name';
                var amt='$total';
                var email='$s_email';
                
                jQuery.ajax({
                    type:'post',
                    url:'donated.php',
                    data:'amt='+amt+'&name='+name+'&email='+email,
                    success:function(result){
                        var options = {
                                'key': 'rzp_Live_COIQVjGYbznuI6', 
                                'amount': amt*100, 
                                'currency': 'INR',
                                'name': 'Maharaj Ji',
                                'description': 'Test Transaction',
                                'image': 'https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg',
                                'handler': function (response){
                                jQuery.ajax({
                                    type:'POST',
                                    url:'donated.php',
                                    data:'payment_id='+response.razorpay_payment_id+'&name='+name+'&amt='+amt+'&email='+email,
                                    success:function(result){
                                        window.alert('Your Donation Placed Successfully.');
                                        window.location.href='index.php';
                                    }
                                });
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                    }
                });
            
            </script>";
	}
    else 
	{
		echo "Error: rerd not Added " ;
	}
}
if(isset($_POST['done']))
{ 
    $name=$_POST['name'];
    
	$imag = $_FILES['main_image']['name'];
	$date= date('Y-m-d-H-i');
	$main_image = $date.$imag;

    $s_email = $_SESSION['client'];

    move_uploaded_file($_FILES['main_image']['tmp_name'],'./img/'.$main_image);
    $sql = "UPDATE donation SET 
    tx_id='$name',image='$main_image',status='4' WHERE email ='$s_email' AND status = '0' ORDER BY sno DESC LIMIT 1";

    $run = mysqli_query($con,$sql);
    if($run)
	{
        echo"
            <script>
                window.alert('Your Donation Placed Successfully.');
                window.location.href='index.php';
            </script>";
	}
    else 
	{
		echo "Error: rerd not Added " ;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Donation</title>
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
    <link rel="stylesheet" href="donation.css" />
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

    <!-- PAYMENT START -->
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <section style="background-color: #eee">
      <div class="container py-5">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 col-lg-10 col-xl-8">
            <div class="card">
              <div class="card-body p-md-5">
                <div>
                  <h4 data-aos="slide-up" data-aos-duration="500">
                  <?php 
                        $sql = "SELECT * FROM `admin` ORDER BY id DESC LIMIT 1 ";
                        $hes = mysqli_query($con, $sql) or die( mysqli_error($con));
                        foreach($hes as $row)
                        { 
                    ?>
                    <img src="<?php echo "./qr/".$row['qr']?>" style="height:300px;"  />
                    <?php } ?>
                  </h4>
                  <p
                    class="text-muted pb-2"
                    data-aos="slide-up"
                    data-aos-duration="700"
                  >
                    सभी महानुभावी दानी- दाताओं का बहुत बहुत धन्यवाद एवं आभार.
                    परम पूज्य गुरूजी के द्वारा चलायें जा रहे सभी सेवा प्रकल्पों
                    एवं भविष्य में होने वाली सभी सेवाओं के लिए आप इस पेमेंट
                    गेटवे के माध्यम से दान दे सकते है.
                  </p>
                </div>

                <h4 class="mt-5" data-aos="slide-up" data-aos-duration="900">
                  Payment details
                </h4>

                <form action="" method="POST" enctype="multipart/form-data">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12" data-aos="slide-up" data-aos-duration="700">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="name" class="form-control" required/>
                                <label for="email" class="">Your Payment Id</label>
                            </div>
                        </div>
                    </div>
                    <div class="section-space"></div>
                    <div class="row">
                        <div class="col-md-12" data-aos="slide-up" data-aos-duration="700">
                            <div class="md-form mb-0">
                                <input type="file" id="email" name="main_image" class="form-control" required/>
                                <label for="email" class="">Your Payment Screenshot</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="section-space"></div>
                    <div class="section-space"></div>
                    <div class="section-space"></div>
                    <div class="text-center text-md-left">
                        <button type="submit" name="done"  class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PAYMENT END -->

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
