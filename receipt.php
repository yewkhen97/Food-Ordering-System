<?php
include "includes/session.php";
include "includes/head.php";
include "includes/header.php";
?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>

</head>
<body>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Payment Receipt</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Payment Receipt </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
         <section class="htc__checkout bg--white section-padding--lg">
            <!-- Checkout Section Start-->
            <div class="checkout-section">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-6 col-12 mb-30">
                               
                                <!-- Checkout Accordion Start -->
                                <div id="checkout-accordion">
                                   
                                    <!-- Checkout Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method">Invoice</a>
                                        
                                        <div id="checkout-method" class="collapse show">
                                            <div class="checkout-method accordion-body fix">
                                               
                                                <ul style="font-weight: bold;">
                                                    <?php
                                                    $query="SELECT * FROM payment";
                                                    $result=mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $PaymentID = $row["PaymentID"];
                                                        $date = $row["PaymentDate"];
                                                        $cartID = $row["CartID"];
                                                        $total = $row["PaymentPrice"]; 

                                                    }
                                                    ?>
                                                <li>Invoice No: <?php echo $PaymentID; ?></li>
                                                <li>Date: <?php echo $date; ?></li>
                                                </ul> 
                                            </div>
                                        </div>     
                                    </div>    
                                </div><!-- Checkout Accordion Start -->
                            </div>   
                            <!-- Order Details -->
                            <div class="col-lg-6 col-12 mb-30">
                                <div class="order-details-wrapper">
                                    <h2>order detail</h2>
                                    <div class="order-details">
                                            <ul>
                                                <li><p class="strong">product</p><p class="strong">total</p></li>
                                            <?php

                                            $arrCartID=explode(",","$cartID");
                                            for ($i=0; $i<count($arrCartID); $i++) { 
                                                $query="SELECT * FROM cart WHERE CartID IN ('$arrCartID[$i]')";           
                                                $result = mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $product = $row["Product"];
                                                        $price = $row["Total"];  
                                                        echo "<li><p>$product</p><p>RM $price</p></li>";
                                                    }
                                            }           
                                                echo "<li><p class='strong'>Destination Fee</p><p class='strong'>RM 1</p></li>";
                                                echo "<li><p class='strong'>order total</p><p class='strong'>RM $total</p></li>";                                                
                                               
                                                $query = "UPDATE cart SET PayStatus='Paid' WHERE PayStatus='Unpaid'";
                                                $result = mysqli_query($conn,$query);

                                                ?>
                                                <li><a class='food__btn' href="despatcherlist.php?id=<?php echo $PaymentID; ?>">Select Despatcher</a>
                                                </li>   
                                            </ul>
                                    </div>
                                </div>  
                            </div>                     
                    </div>
                </div>
            </div><!-- Checkout Section End-->             
         </section>   
        <!-- Start Footer Area -->
<?php
    include 'includes/footer.php';
?>
</body>
</html>
