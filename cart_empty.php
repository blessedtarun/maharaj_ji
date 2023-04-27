<?php 
session_start();
if(isset($_SESSION['cart']))
{
unset($_SESSION['cart']); 
echo"<script>alert('Cart Successfully Empty.');
                    window.location.href='cart.php';
                    </script>";
}else
{
    echo"<script>alert('Cart Is Already Empty.');
                    window.location.href='cart.php';
                    </script>";
}
?>