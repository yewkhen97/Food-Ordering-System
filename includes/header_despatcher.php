<?php 
if(isset($_SESSION['userType']))
{
    if ($_SESSION['userType']!="despatcher") {
header("location:index.php");
    }

}
?>
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/foody.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                        </li> 
                                        <li class="drop"><a href="D_FviewD.php">Feedback</a></li>  
                                        <li class="drop">Manage Food Order
                                            <ul class="dropdown__menu">
                                                <li><a href="managedespatcher1.php">Take order</a></li>
                                                <li><a href="managedespatcher2.php">Done order</a></li>
                                            </ul>
                                        </li> 
                                         <li class="drop"><a href="D_salesreport.php">Sales Report
        
                                        </li>   
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">

                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                <?php 

                                if(isset($_SESSION['user']))
                                {   
                                   echo '<li class="drop"><a>'.$_SESSION['user'].'</a>
                                            <ul class="dropdown__menu">
                                            <li><a href="despatcher_profile.php">Update Profile</a></li>
                                            <li><a href="includes/logout.php">Logout</a></li>
                                            </ul>
                                        </li>';

                                        echo "</ul></nav>";

                                }
                                else{
                                ?>
                                    <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <?php }?>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->