<?php
$order1=1;
$order2=2;
$order3=3;
$order4=4;
$order5=5;



?>










<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Bloom - Flower Delivery</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="shop.css"/>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
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
                    <li><a href="market.html">Flower Market</a></li>
                    <li><a href="about.html">About Us</a></li>
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
                <li>Flower Market</li>
            </ul>
        </div> <!-- End of Breadcrumb-->
        <div class="header">
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count"></p></div>
        </div>
       
        <div class="flower-section shop">
            <div class="sidebar">
                <div class="sidebar-widget">
                    <h3>Flower Types</h3>
                    <ul>
                        <li><a href="">Roses</a></li>
                        <li><a href="">Tulips</a></li>
                        <li><a href="">Lilies</a></li>
                        <li><a href="">Sunflowers</a></li>
                        <li><a href="">Orchids</a></li>
                    </ul>
                </div>
                <br>
                <div class="sidebar-widget">
                    <h3>Occasions</h3>
                    <ul>
                        <li><a href="">Birthday</a></li>
                        <li><a href="">Anniversary</a></li>
                        <li><a href="">Wedding</a></li>
                        <li><a href="">Sympathy</a></li>
                    </ul>
                </div>
            </div>
           <div class="flower-content">
                <div class="flower">
                    <a href="checkout.php?id=<?php echo $order1; ?>">
                        <img src="rosegarden.jpg">
                    </a>
                    
                    <div class="flower-detail">
                        <h3>Red Roses</h3>
                        <h2>Classic Collection</h2>
                        <h2>Order no:<?php echo $order1; ?></h2>
                        <a href="checkout.php?id=<?php echo $order1; ?>">Add to Cart</a>
                        <p>$24.99</p>
                    </div>
                    
                </div>
                <div class="flower">
                    <a href="checkout.php?id=<?php echo $order2; ?>">
                        <img src="purpletulip.jpg">
                    </a>
                    <div class="flower-detail">
                        <h3>Purple Tulips</h3>
                        <h2>Premium Collection</h2>
                        <h2>Order no:<?php echo $order2; ?></h2>
                        <a href="checkout.php">Add to Cart</a>
                        <p>$29.99</p>
                    </div>
                </div>
                <div class="flower">
                    <a href="checkout.php?id=<?php echo $order3; ?>">
                        <img src="whitelilies.jpg">
                    </a>
                    <div class="flower-detail">
                        <h3>White Lilies</h3>
                        <h2>Deluxe Collection</h2>
                        <h2>Order no:<?php echo $order3; ?></h2>
                        <a href="checkout.php">Add to Cart</a>
                        <p>$34.99</p>
                    </div>
                </div>
                <div class="flower">
                    <a href="checkout.php?id=<?php echo $order4; ?>">
                        <img src="sunflower.jpg">
                    </a>
                    <div class="flower-detail">
                        <h3>Bright Sunflowers</h3>
                        <h2>Standard Collection</h2>
                        <h2>Order no:<?php echo $order4; ?></h2>
                        <a href="checkout.php">Add to Cart</a>
                        <p>$19.99</p>
                    </div>
                </div>
                <div class="flower">
                    <a href="checkout.php?id=<?php echo $order5; ?>">
                        <img src="pinkorchid.jpg">
                    </a>
                    <div class="flower-detail">
                        <h3>Pink Orchids</h3>
                        <h2>Premium Collection</h2>
                        <h2>Order no:<?php echo $order5; ?></h2>
                        <a href="checkout.php">Add to Cart</a>
                        <p>$29.99</p>
                    </div>
                </div>
            </div>
        </div> 
       

        <div class="load-more">
            <a href="#">Load More</a>
        </div>
    </main> <!-- Main Area -->
</div>


<footer>
    <div class="container">
        <div class="footer-widget">
            <div class="widget">
                <div class="widget-heading">
                    <h3>Important Links</h3>
                </div>
                <div class="widget-content">
                    <ul>
                        <li><a href="about.html">About Us</a></li>
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
        </div> <!-- Footer Widget -->
        <div class="footer-bar">
            <div class="copyright-text">
                <p>Proudly made by lost_inline.<br>
                    &copy; Bloom 2023 All Rights Reserved.</p>
            </div>
        </div> <!-- Footer Bar -->
    </div>
</footer> <!-- Footer Area -->
<script src="shop.js"></script>

</body>

</html>
