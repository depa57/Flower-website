<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>My Cart - Flower Shop</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="cart.css"/>
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
               
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
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
                <li><a href="shop.html">Shop</a></li>
                <li> /</li>
                <li>Cart</li>
            </ul>
        </div> <!-- End of Breadcrumb-->

        <div class="header">
            <p class="logo">LOGO</p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i>
                <div>
                  <p id="count"></p>
                </div>
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
                        <li><a href="checkout.php">Checkout</a></li>
                    </ul>
                </div>
            </div>
           
        </div> <!-- Footer Widget -->
        <div class="footer-bar">
            <div class="copyright-text">
                <p>Proudly made by lost_inline.<br>
                    &copy; Bloom 2023 All Rights Reserved.</p>
            </div>
        </div> <!-- Footer Bar -->
    </div>
</footer> <!-- Footer Area -->
<script src="cart.js"></script>

</body>

</html>