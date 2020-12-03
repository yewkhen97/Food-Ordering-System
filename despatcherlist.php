<?php
include "includes/session.php";
include "includes/head.php";
include "includes/header.php";
?>

<?php
$query="SELECT PaymentID FROM payment";           
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
$idURL = $row["PaymentID"];
}
$id=$user['CustID'];
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
              <h2 class="bradcaump-title">despatcher list</h2>
              <nav class="bradcaump-inner">
                <a class="breadcrumb-item" href="index.php">Home</a>
                <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                <span class="breadcrumb-item active">despatcher list</span>
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
                                        <!-- Start Search Area -->
                            <div class="food__search">
                                <h4 class="side__title">Search</h4>
                                <div class="serch__box">
                                    <form method="POST" action="searchdespatcher.php">
                                        <input type="text" name="search" placeholder="Search despatcher name">
                                        <input type="hidden" name="id" value=<?php echo $idURL; ?>>
                                         <input type="submit" name="submit" value="SEARCH"><i class="fa fa-search"></i></input>
                                    </form>
                                </div>
                            </div>
                            <!-- End Search Area -->
              <div class="table-content table-responsive">
                <table  style="font-size: 20">
                  <thead>
                    <tr class="title-top">
                      <th class="product-name">ID</th>
                      <th class="product-quantity">Despatcher</th>
                      <th class="product-subtotal">Comment</th>
                      <th class="product-remove">Rating(1-5)</th>
                      <th class="product-remove">Action</th>
                    </tr>
                  </thead>
                  <tbody style="font-weight: bold;">

                    <?php
                    $query="SELECT * FROM despatcher JOIN feedback ON despatcher.DespatcherID=feedback.DespatcherID Group BY despatcher.DespatcherID";
                    $result = mysqli_query($conn,$query);
                    while($row = $result->fetch_assoc()){
                     $id=$row['DespatcherID'];
                     ?>

                      <tr>
                      <td><?php echo $row["DespatcherID"]; ?> </td>
                      <td><?php echo $row["DesName"]; ?> </td>
                      <td><?php echo $row["Comment"]; ?> </td>
                      <td><?php echo $row["Rating"];?> </td>
                      <td><form method='post' action='selectdespatcher.php'>
                        <input type="hidden" name="id" value=<?php echo $id; ?>>
                        <input type="hidden" name="paymentid" value=<?php echo $idURL; ?>>
                        <input type="submit" value="select">
                      </form>
                      </td>
                      </tr>
                      <?php }  ?> 
                     </tbody>  
                </table>
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
