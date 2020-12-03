<?php
session_start();
include "includes/head.php";
include "includes/header.php";
include "includes/conn.php";
?>

<?php 
        if (isset($_GET['category'])) {
           $category=$_GET['category'];
           if ($category=='breakfast') {
                $sql = "SELECT * FROM item JOIN restaurant ON item.ResID=restaurant.ResID WHERE category='$category'";
                $query = $conn->query($sql);
           }
           elseif ($category=='lunch') {
                $sql = "SELECT * FROM item JOIN restaurant ON item.ResID=restaurant.ResID WHERE category='$category'";
                $query = $conn->query($sql);
           }
           elseif ($category=='dinner') {
                $sql = "SELECT * FROM item JOIN restaurant ON item.ResID=restaurant.ResID WHERE category='$category'";
                $query = $conn->query($sql);
           }
        }
        else {
           
            $sql = "SELECT * FROM item JOIN restaurant ON item.ResID=restaurant.ResID";
            $query = $conn->query($sql);
        }
 ?>


    <body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    
    <!-- <div class="fakeloader"></div> -->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Menu List</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Menu List</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="food__sidebar">
                            <!-- Start Search Area -->
                            <div class="food__search">
                                <h4 class="side__title">Search</h4>
                                <div class="serch__box">
                                    <form method="POST" action="search.php">
                                        <input type="text" name="f" placeholder="Search food name">
                                         <input type="submit" name="submit"><i class="fa fa-search"></i></input>
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- End Search Area -->
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <?php
        if (!empty($query)) {
         while ($row=mysqli_fetch_array($query)) {
            if($row['Status']=='Available')
            {

     
         ?>

        <!-- Start Blog List View Area -->
        <section class="blog__list__view section-padding2--lg menudetails-right-sidebar bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="food__menu__container">
                            <div class="food__menu__inner d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                                <div class="food__menu__thumb">

                                 
                                    
                                </div>
                                <div class="food__menu__details">
                                    <div class="food__menu__content">
                                        <form  id='myform' method='POST' action='addtocart.php'>
                                        <input type="hidden" name="restaurantID" value=<?php echo $row['ResID']; ?>>
                                        <input type="hidden" name="itemID" value=<?php echo $row['ItemID']; ?>>
                                        <input style="font-size:20;font-weight:bold"  type ="text" name="product" size="40" value="<?php echo $row['ItemName']; ?>" readonly><div>RM</div>
                                        <input style="font-weight:bold" type ="text" name="price" value="<?php echo $row['Price']; ?>"  readonly>
                                        <span>Restaurant: <?php echo $row['Name']; ?></span>
                                        <p>Description: <?php echo $row['ItemDesc']; ?></p>
                                        <div class="product-action-wrap">
                                            <div class="product-quantity">
                                                
                                                    <div class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                             Enter Quantity: <input class="cart-plus-minus-box" type="number" name="qtybutton" value="1">
                                                        </div>

                                                            <input type='submit' class="food__btn" value="Add to Cart"> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Blog List View Area -->
  <?php   }
            }
        }
        include "includes/footer.php";
    
   ?>
</body>
</html>
