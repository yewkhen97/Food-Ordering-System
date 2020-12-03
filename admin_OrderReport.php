<?php
  include 'includes/session.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Site</title>
    <meta name="description" content="">


    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
 <link rel="stylesheet" href="css/custom.css">

 <!-- Modernizer js -->
 <script src="js/vendor/modernizr-3.5.0.min.js"></script>
 <!-- Required meta tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
        <?php 
            include "includes/header_admin.php";
        ?>
        <!-- Start Slider Area -->
        <div class="slider__area slider--one">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                         <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Order report</h2>
                </div>
                <div class="card-body">

<table>

<tr><th>Order ID</th><th>Customer ID</th><th>Despatcher ID</th><th>Restaurant ID</th><th>Status</th></tr>
                    <?php
$sql = "SELECT * FROM orderdetail JOIN despatcher ON orderdetail.DespatcherID=despatcher.DespatcherID JOIN restaurant ON orderdetail.ResID=restaurant.ResID JOIN customer ON orderdetail.CustID=customer.CustID";
$sql2 = "SELECT * FROM orderdetail JOIN despatcher ON orderdetail.DespatcherID=despatcher.DespatcherID JOIN restaurant ON orderdetail.ResID=restaurant.ResID ";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc())
    {
        $Rname[]=$row2['Name'];
    }
$i=0;
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>".$row['OrderID']."</td><td>".$row['Name']."</td><td>".$row['DesName']."</td><td>".$Rname[$i]."</td><td>".$row['Status']."</td></tr>";
        $i++;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
                </div>
            </div>
        </div>
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <?php if (empty($_SESSION['user'])) {
            echo "<section class='fd__service__area bg-image--2 section-padding--xlg'>
            <div class='container'>
                <div class='service__wrapper bg--white'>
                    <div class='row'>
                        <div class='col-md-12 col-lg-12'>
                            <div class='section__title service__align--left'>
                                <p>Partnership that can apply!!</p>
                                <h2 class='title__line'>Join our team right now!!</h2>
                            </div>
                        </div>
                    </div>
                    <div class='row mt--30' >
                        <!-- Start Single Service -->
                        <div class='col-sm-12 col-md-6 col-lg-4'>
                            <div class='service'>
                                <div class='service__title'>
                                    <div class='ser__icon'>
                                        <img src='images/icon/color-icon/1.png' alt='icon image'>
                                    </div>
                                    <h2><a href='restaurant_registeration.php'>List your restaurant on U-Bung</a></h2>
                                </div>
                                <div class='service__details'>
                                    <p>Would you like thousands of new customers to taste your amazing food? So would we!
It's simple: we list your menu online, help you process orders, pick them up, and deliver them to hungry pandas - in a heartbeat!
Interested? Let's start our partnership today!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class='col-sm-12 col-md-6 col-lg-4'>
                            <div class='service'>
                                <div class='service__title'>
                                    <div class='ser__icon'>
                                        <img src='images/icon/color-icon/3.png' alt='icon image'>
                                    </div>
                                    <h2><a href='service.html'>Join our delivery team!</a></h2>
                                </div>
                                <div class='service__details'>
                                    <p>Would you like to join our delivery team to earn the extra money? Let's start as apart of our delivery team right now!!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->";
   }?>
              
        
       
                        
                       
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved.<a href="index.php">UBung</a></p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                        <img src="images/icon/shape/2.png" alt="payment images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="login.php" method="POST">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="username" placeholder="User name" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="single-input">
                                <button type="submit" name="submit"class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="register.php" method="POST">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="username" placeholder="User name" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="name" placeholder="name" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="password" id="password" placeholder="Password" onchange='check_pass();' required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="Confirmpass" id="Confirmpass" placeholder="Confirm password" onchange='check_pass();' required><span id='message'></span>
                            </div>
                            <script>
                            function check_pass() 
                            {
                                if (document.getElementById('password').value == document.getElementById('Confirmpass').value)
                                {
                                    document.getElementById('submit').disabled = false;
                                    document.getElementById('message').style.color = 'green';
                                    document.getElementById('message').innerHTML = 'Password matched';
                                 } 
                                else 
                                {
                                    document.getElementById('submit').disabled = true;
                                    document.getElementById('message').style.color = 'red';
                                    document.getElementById('message').innerHTML = 'Password not matched';
                                }
                            }   
                            </script>
                            <div class="single-input">
                                <button type="submit" name="submit" class="food__btn" id="submit" disabled><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
        <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->  
    </div><!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
</body>
</html>
