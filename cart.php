<?php
include "includes/session.php";
include "includes/head.php";
include "includes/header.php";
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="bradcaump__inner text-center">
              <h2 class="bradcaump-title">cart page</h2>
              <nav class="bradcaump-inner">
                <a class="breadcrumb-item" href="index.php">Home</a>
                <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                <span class="breadcrumb-item active">cart page</span>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cart-main-area section-padding--lg bg--white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 ol-lg-12">
               
              <div class="table-content table-responsive">
                <table style="font-size: 20">
                  <thead>
                    <tr class="title-top">
                      <th class="product-name">Product</th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="product-subtotal">Total</th>
                      <th class="product-remove">Edit</th>
                      <th class="product-remove">Delete</th>
                    </tr>
                  </thead>
                  <tbody style="font-weight: bold">
                    <?php
                    $add='0';
                    $userID=$user["CustID"];
                    $query="SELECT * FROM cart WHERE CustID=$userID AND PayStatus='Unpaid'";
                    $result = mysqli_query($conn,$query);
                            while($row = $result->fetch_assoc()){
                                $id = $row["CartID"];
                                $arrid[] = $row["CartID"];
                                $strid =implode(",",$arrid);


                                $arrprice[] = $row["Price"];
                                $price=implode(",",$arrprice);


                                $add=$add+$row["Total"]; ?>
                                      <tr>
                                      <td><?php echo $row["Product"]; ?> </td>
                                      <td><?php echo $row["Price"]; ?> </td>
                                      <td><?php echo $row["Quantity"]; ?> </td>
                                      <td><?php echo $row["Total"]; ?> </td>
                                      <form method='post' action='editcart.php'>
                                      <td><input type='number' name='newquantity' placeholder='0'>
                                          <input type='hidden' name='CartID' value=<?php echo $row["CartID"]; ?>>
                                          <input type='submit' value='Edit'>
                                      </td>
                                      </form>
                                      <td><a href="deletecart.php?id=<?php echo $id; ?>">Delete</a>
                                      </td>
                                      </tr>

                       <?php }  ?>                                 
                     </tbody>  
                </table>
            </div>
                        <div class='cartbox__btn'>
                            <ul class='cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between'>
                                <li><a href='voucher.php'>Coupon Code</a></li>
                                <li><a href='#'>Apply Code</a></li>
                                <li><a href='cartgraph.php'>View Paid Rate</a></li>
                                <li><a href='menu-list.php'>Back to Menu </a></li>
                                <li><form method="post" action="addtoreceipt.php">
                                    <input type="hidden" name="cartID" value=" <?php echo $strid; ?>">
                                    <input type="hidden" name="price" value=" <?php echo $add; ?>">
                                    <input style="font-weight:bold;color: red;font-size: 25" type="submit" value="CheckOut">  
                                    </form>
                                </li>

                            </ul>
                        </div>      
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span><?php echo "RM ".$add ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->
        <!-- Start Footer Area -->
<?php
    include 'includes/footer.php';
?>
</body>
</html>
