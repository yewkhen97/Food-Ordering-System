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
              <h2 class="bradcaump-title">order status</h2>
              <nav class="bradcaump-inner">
                <a class="breadcrumb-item" href="index.php">Home</a>
                <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                <span class="breadcrumb-item active">order status</span>
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
                <table  style="font-size: 20">
                  <thead>
                    <tr class="title-top">
                      <th class="product-name">Order No.</th>
                      <th class="product-quantity">Despatcher</th>
                      <th class="product-subtotal">ETA</th>
                      <th class="product-subtotal">Status</th>
                      <th class="product-remove">Edit</th>
                    </tr>
                  </thead>
                  <tbody style="font-weight: bold;">

                    <?php
                    $id=$user['CustID'];
                    $query="SELECT * FROM orderdetail JOIN despatcher ON orderdetail.DespatcherID=despatcher.DespatcherID WHERE  CustID='$id'";
                    $result = mysqli_query($conn,$query);
                    while($row = $result->fetch_assoc()){
                      $id=$row["OrderID"];
                     ?>
                     <form method="GET" action="updatestatus.php">
                       <tr>
                      <td><?php echo $row["OrderID"]; ?> </td>
                      <td><?php echo $row["DesName"]; ?> </td> 
                      <td><?php echo $row["ETA"]; ?> </td>
                      <td style="color:red;"><?php echo $row["Status"]; ?> </td>
                      <?php if ($row["Status"]=="Delivered") { 
                         echo "<td><div class='single-input'>
                                <button type=submit name=submit class='food__btn' id='id' value=".$row['OrderID']." ><span>Received</span></button>
                          </div>";
                          ?>
                      </td>
                    <?php  }
                    else
                      {?>
                        <td><div class="single-input">
                                <button type="submit" name="submit" class="food__btn" id="id" value="" Disabled ><span>Received</span></button>
                          </div>
                      </td>
            <?php         }?>

                      
                      </tr>
                     </form>
                      
                       <?php }  ?>                                 
                     </tbody>
                </table>
            </div>
            <div class='cartbox__btn' align="center">
              <a style="font-weight: bold;" href='index.php'>Back to Mainpage</a>
            </div>  
         </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6" >
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                            </div>
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
