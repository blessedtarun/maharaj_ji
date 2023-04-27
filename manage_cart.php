<?php
    // include('header.php');
    session_start();
    if(!isset($_SESSION['client']))
{
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Please Login First.');
  window.location.href='login.php';
  </script>");
}
    if(isset($_GET['cart']))
    {
        $ca = $_GET['ca'];
        $q_price = $_GET['q_price'];
        $fdf = $_GET['qty'];
        // print_r($ca);
        // die();
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'pid');
            if(in_array($ca,$myitems))
            {
                echo"<script>alert('This Product Already Added');
                    window.location.href='cart.php';
                    </script>";
            }
            else
            {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('pid'=>$ca,'qty'=>$fdf,'price'=>$q_price);
                // print_r( $_SESSION['cart']);
                // die();
                echo"<script>
                    window.location.href='cart.php';
                    </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('pid'=>$ca,'qty'=>$fdf,'price'=>$q_price);
            // print_r( $_SESSION['cart']);
            // die();
            echo"<script>
                window.location.href='cart.php';
                </script>";
        }
    }
    elseif(isset($_GET['car']))
    {
        $ca = $_GET['ca'];
        $url = $_GET['car'];
        $q_price = $_GET['q_price'];
        $fdf = $_GET['qty'];
        // print_r($ca);
        // die();
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'pid');
            if(in_array($ca,$myitems))
            {
                echo"<script>alert('This Product Already Added');
                    window.location.href='cart.php';
                    </script>";
            }
            else
            {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('pid'=>$ca,'qty'=>$fdf,'price'=>$q_price);
                // print_r( $_SESSION['car']);
                // die();
                echo"<script>
                    window.location.href='$url.php';
                    </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('pid'=>$ca,'qty'=>$fdf,'price'=>$q_price);
            // print_r( $_SESSION['car']);
            // die();
            echo"<script>
                window.location.href='$url.php';
                </script>";
        }
    }
    elseif(isset($_GET['dcar']))
    {
        $ca = $_GET['ca'];
        $url = $_GET['dcar'];
        $q_price = $_GET['q_price'];
        $fdf = $_GET['qty'];
        // print_r($ca);
        // die();
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'pid');
            if(in_array($ca,$myitems))
            {
                echo"<script>alert('This Product Already Added');
                    window.location.href='cart.php';
                    </script>";
            }
            else
            {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('pid'=>$ca,'qty'=>$fdf,'price'=>$q_price);
                // print_r( $_SESSION['car']);
                // die();
                echo"<script>alert('This Product Added');
                    window.location.href='$url.php?id=$ca';
                    </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('pid'=>$ca,'qty'=>$fdf,'price'=>$q_price);
            // print_r( $_SESSION['car']);
            // die();
            echo"<script>alert('This Product Added');
                window.location.href='$url.php?id=$ca';
                </script>";
        }
    }
    

?>
