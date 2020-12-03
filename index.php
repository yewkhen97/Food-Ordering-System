<?php
    session_start();
    if (isset($_SESSION["userType"])) {
        if($_SESSION["userType"]=="admin")
        {
            header("location:admin.php");
        }
        elseif ($_SESSION["userType"]=="restaurant") {
          header("location:restaurant.php");
        }
        elseif($_SESSION["userType"]=="despatcher")
        {
            header("location:Despatcher.php");
        }
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include"includes/head.php";?>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
        <?php 
            include "includes/header.php";
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
                                    <div class="slider__inner">
                                          <h2>“U-Bung”</h2>
                                        <h1>food delivery & service</h1>
                                        <div class="slider__input">
                                           <form method="POST" action="search.php">
                                               <input type="text" name="f" value="" placeholder="Type food name">
                                                <input class="res__search" name="resSearch"  type="text" placeholder="Restaurant">
                                                <input class="Searchbtn" type="submit" name="submit" value="Search"></input>
                                           </form>
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
                                    <h2><a href='D_register.php'>Join our delivery team!</a></h2>
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
              
        <!-- Start Food Category -->
        <section class="food__category__area bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>The process of our service</p>
                            <h2 class="title__line">Search by food category</h2>
                        </div>
                    </div>
                </div>
                <div class="food__category__wrapper mt--40">
                    <div class="row">
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-list.php?category=breakfast">
                                        <img src="images/product/md-product/1.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-list.php?category=breakfast">Breakfast Item</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-list.php?category=lunch">
                                        <img src="images/product/md-product/2.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-list.php?category=lunch">Lunch Item</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-list.php?category=dinner">
                                        <img src="images/product/md-product/3.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-list.php?category=dinner">Dinner Item</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Food Category -->
        <?php
        include "includes/footer.php";
        ?>
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
