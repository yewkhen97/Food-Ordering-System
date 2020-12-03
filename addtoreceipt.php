<?php
include "includes/session.php";
?>

<?php
    
    $query = "SELECT CartID FROM cart WHERE PayStatus='Unpaid'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)<=0){
        echo "<script>alert('Cart is empty now')</script>"; 
        echo "<script>location.href='index.php'</script>";
    }
    else
    {
        $userID=$user['CustID'];
        $cartID=$_POST['cartID'];
        $price=$_POST['price']+1;
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $date=date("Y/m/d");
        $newdate=date('Y/m/d', strtotime($date. ' + 30 day'));


        $query = "INSERT INTO payment VALUES ('','$cartID','$date','1','$price')";
        $result = mysqli_query($conn,$query);


        $query="SELECT PaymentID FROM payment";           
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
            $paymentID = $row["PaymentID"];
        }



        $query="SELECT * FROM cart WHERE PayStatus='Unpaid'"; 
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
            $resID[] = $row["ResID"];
            $itemID[] = $row["ItemID"];
        }
        $num=count($resID);


        for ($i=0; $i<$num ; $i++) { 
            $query = "INSERT INTO orderdetail VALUES ('','','$resID[$i]','$itemID[$i]','$userID','','','Pending')";
            $result = mysqli_query($conn,$query);
        }


        if($price > 35){
            for ($i=0; $i < 2; $i++) { 
                 $query = "INSERT INTO voucher VALUES ('','$paymentID','$userID','$newdate','5%')";
                 $result = mysqli_query($conn,$query);
            }
        }


        if($result) 
        {           
            echo "<script>alert('Checkout successful')</script>";  
            echo "<script>location.href='receipt.php'</script>";
        
         }
        else 
        {             
            die("Checkout failed");
        }    
    } 
?>