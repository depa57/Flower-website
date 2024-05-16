
<?php 
include 'connect.php';
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $flower_name="";
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $ph=$_POST['mobile'];
    $oname=$_POST['order'];

    if($oname==1){
        $flower_name="Red Roses";
    }elseif($oname==2){
        $flower_name="Purple Tulips";
    }elseif($oname==3){
        $flower_name="White Lilies";
    }elseif($oname==4){
        $flower_name="Bright Sunflower";
    }else{
        $flower_name="Pink Orchid";
    }

    $sql="INSERT INTO `orders` (`id`, `fname`, `lname`, `address`, `email`, `mobile`, `Order_Item`) VALUES (NULL, '$fname', '$lname', '$address', '$email', '$ph', '$flower_name')";
    $result=mysqli_query($con,$sql);
    if($result){
         echo "<h2>Your order has been successfully placed</h2>";
    }
    else{
        echo "<h2>Please try again</h2>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Check out - Bloom</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="checkout.css"/>
</head>
<body>

<header>
    <div class="container">
        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src="logo.png">
                    <div class="logo-text">
                        <p class="big-logo">Bloom</p>
                        <p class="small-logo">Flower Delivery</p>
                    </div>
                </a>
            </div> <!-- logo -->
        
        <div class="menu-bar">
            <div class="menu">
                <ul>

                    <li><a href="index.html">Home</a></li>
                    <li><a href="market.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="search-bar">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <img src="search.png">
                    </div>
                </form>
            </div>
        </div> <!-- menu -->
    </div> <!-- container -->
</header> <!-- header -->

<div class="container">
    <main>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li> /</li>
                <li><a href="market.html">Market</a></li>
                <li> /</li>
                <li><a href="cart.html">Cart</a></li>
                <li> /</li>
                <li>Checkout</li>
            </ul>
        </div> <!-- End of Breadcrumb-->

        <h2>Billing Detail</h2>
        <details open>
            <div class="checkout-page">
                <div class="billing-detail">
                    <form class="checkout-form" action="" method="POST" autocomplete="off">
                        <h4>Shipping Detail</h4>
                        <div class="form-inline">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname">
                            </div>
                        </div>
                        
                        <div class="form-inline">
                           
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" id="fname" name="address" required>
                                
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="fname" name="email" required>
                                
                            </div>
                        </div>
                        
                        
                        <h4>Contact Detail</h4>
                        <div class="form-inline">
                            
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" id="mobile" name="mobile" minlength="11" maxlength="11">
                            </div>
                        </div>
                        <h4>Order</h4>
                        <div class="form-group">
                            <label for="note">Order No.</label>
                            <input type="text" style="resize:none" id="note" name="order" rows="3" value="<?php echo $id; ?>">
                        </div>
                        <input type="submit">
                    </form>
                </div>
    
                    
            </div>
       
    </main> <!-- Main Area -->
</div>


<footer>
    <div class="container">
        <div class="footer-widget">
            <div class="widget">
                <div class="widget-heading">
                    <h3>Important Link</h3>
                </div>
                <div class="widget-content">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="refund.html">Refund Policy</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="widget">
                <div class="widget-heading">
                    <h3>Information</h3>
                </div>
                <div class="widget-content">
                    <ul>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="orders.html">My Orders</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <div class="widget">
                <div class="widget-heading">
                    <h3>Follow us</h3>
                </div>
                <div class="widget-heading">
                    <h3>Subscribe for Newsletter</h3>
                </div>
                <div class="widget-content">
                    <div class="subscribe">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subscribe" placeholder="Email">
                                <img src="img/icons/paper_plane.png">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- Footer Widget -->
        <div class="footer-bar">
            <div class="copyright-text">
                <p>Proudly made by lost_inline.<br>
                    Copyright &copy; Bloom 2023 All Rights Reserved.</p>
            </div>
        </div> <!-- Footer Bar -->
    </div>
</footer> <!-- Footer Area -->
</body>

</html>
