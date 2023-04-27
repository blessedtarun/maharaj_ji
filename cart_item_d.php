<?php
include('config.php');

    session_start();
 // REMMOVE CART
    if(isset($_GET['r_id']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            // print_r($key);
            if($value['pid']==$_GET['r_id'])
            {
                // ye aaray ki jis index pe item hai usko remove kar rha hai
                unset($_SESSION['cart'][$key]);
                // <!-- ye array ki index ko rearange kr raha hai -->
                $_SESSION['cart']=array_values($_SESSION['cart']);  
                echo"<script>alert('Product Removed');
                    window.location.href='cart.php';
                    </script>";

            }
        }
    }
    
    if(isset($_POST['qty_submit']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['pid']==$_POST['id'])
            {   
                $sno = $_POST['id'];
                $qty = $_SESSION["cart"][$key]['qty'];
                $cat=mysqli_query($con,"select * from `product` WHERE sno ='$sno'");
                while($row=mysqli_fetch_array($cat))
                { 
                    $fqty = $row['qty'];
                    
                    if($fqty>$qty)
                    {
                        $_SESSION["cart"][$key]['qty'] += $_POST['qty'];
                       
                        // print_r($_SESSION['cart']);
                        // die();
                        echo"<script>alert('Product Quantity Updated');
                        window.location.href='cart.php';
                        </script>";
                    }
                    else
                    {
                        echo"<script>alert('Sorry Quantity Is Limited');
                        window.location.href='cart.php';
                        </script>";
                    }
                    
                }
            }
        }
    }
    
    if(isset($_POST['d_qty_submit']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['pid']==$_POST['id'])
            {
                if($_SESSION["cart"][$key]['qty']>'1')
                {
                    $_SESSION["cart"][$key]['qty'] -= $_POST['qty'];
                   
                    echo"<script>alert('Product Quantity Updated');
                        window.location.href='cart.php';
                        </script>";
                }
                else
                {
                     echo"<script>alert('Sorry Quantity Must Atlest 1');
                            window.location.href='cart.php';
                            </script>";
                }
            }
            
        }
    }

?>
