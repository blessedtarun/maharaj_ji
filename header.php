<?php include('config.php'); 
ob_start();
session_start();
if(isset($_SESSION['client']))
{ 
  $email=$_SESSION['client'];
                      
  $ql = "SELECT * FROM user WHERE email = '$email'";
  $rest = mysqli_query($con, $ql) or die( mysqli_error($con));
  while($jjw=mysqli_fetch_array($rest))
  {
    $user_id=$jjw['sno'];
    $f_name=$jjw['fname'];
    $l_name=$jjw['lname'];
  }
}
?>

<style type="text/css">
	
		nav form{
			position: absolute;
			width: 60%;
			left: 25%;
			top: 65px;
		}
		nav form input{
			width: 90%;
			position: relative;
			top: -45px;
			padding: 10px 0px;
			border: none;
			outline: none;
			transform: scaleX(0);
			transform-origin: right;
			transition: .5s;
			border-bottom: 1px solid #e5e5e5;

		}
		nav form input::placeholder{
			font-size: 20px;

		}
		/*js-css*/
		nav form input.expand{
			transform: scaleX(1);
			padding: 10px;
		}
		nav form input.expand ~ .fa-search{
			visibility: hidden;
		}
		nav form input.expand ~ .fa-times{
			display: block;
		}
		nav form .fa{
			position: absolute;
			top: -45px;
			right: 40px;
			cursor: pointer;
			color: #757575;
		}
		.fa-times{
			display: none;
		}
	
			
		}
	</style>


<nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"
          ><img src="Images/logo.png" alt="Logo" height="40px"
        /></a>
        
        
               
               
        <form action="shop.php" method='POST'>
			<input type="text" name='search' id="search" placeholder="Search here...">
			<i class="fa fa-search"></i>
			<i class="fa fa-times"></i>
		</form>
             
        
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mynavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        
        
        
        
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >About</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="about_maharaj.php"
                    >Maharaj Ji / Guru Ji</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="about_sanstha.php">Sanstha</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >Ashram</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="maharashtra.php">Jalgaon</a></li>
                <li><a class="dropdown-item" href="vrindavan.php">Vrindavan</a></li>
                <li><a class="dropdown-item" href="yagya.php">Yagya</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >Seva</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="vridhashram.php"
                    >Vridhashram</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="gaushala.php">Gaushala</a>
                </li>
                <li>
                  <a class="dropdown-item" href="nadi_parikshan.php"
                    >Nadi Parikshan</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="doodh_sewa.php"
                    >Doodh Seva</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="bhandara.php">Bhandara</a>
                </li>
                <li>
                  <a class="dropdown-item" href="bandar_sewa.php"
                    >Bandar Seva</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="plantation.php">Vriksharopan</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Ayurvedic Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>

            <div id="nav-space"></div>
            <?php
                if(isset($_SESSION['client'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="donation.php">Donate</a>
            </li>
             <?php } ?>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                ><i class="fa fa-solid fa-user"></i
              ></a>
              <ul class="dropdown-menu">
                <?php
                if(isset($_SESSION['client'])) { ?>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                <li>
                  <a class="dropdown-item" href="orders.php">My Orders</a>
                </li>
                <?php if(isset($_SESSION['cart'])) { ?>
                <li>
                  <a class="dropdown-item" href="cart.php">My Cart</a>
                </li>
                <?php } } else { ?>
                
                <li><a class="dropdown-item" href="login.php">Login</a></li>
                <li>
                  <a class="dropdown-item" href="signUp.php">Sign up</a>
                </li>
                <?php } ?>
              </ul>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>


<script type="text/javascript">

	var  searchIcon = document.querySelector('.fa-search');
	var  closeIcon = document.querySelector('.fa-times');
	var  search = document.getElementById('search');

	searchIcon.onclick = ()=>{
		search.classList.add('expand');
	}
	closeIcon.onclick = ()=>{
		search.classList.remove('expand');
	}

	var button = document.querySelector('button');
	var menu = document.querySelector('.menu');
	button.onclick = ()=>{
		menu.classList.toggle('expand-mobile');
		button.classList.toggle('expand-icon');

	}



</script>