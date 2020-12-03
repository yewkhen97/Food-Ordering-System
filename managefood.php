<?php
 include 'includes/session.php';
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant Site</title>
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

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
            include "includes/header_restaurant.php";
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
                                            <h2 class="title">INSERT FOOD DETAIL</h2>
                                        </div>
                                        <div class="card-body">
                                   
                                                <form method=POST action=update_restaurant.php>
                                                <div class='form-row'>
                                                    <div class='name'>Food Name: </div>
                                                    <div class='value'>
                                                        <div class='input-group'>
                                                            <input class='input--style-5' type='text' name='ItemName'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='form-row'>
                                                    <div class='name'>Food Description: </div>
                                                    <div class='value'>
                                                        <div class='input-group'>
                                                            <input class='input--style-5' type='text' id=myInput name='ItemDesc'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='form-row'>
                                                    <div class='name'>Food Category: </div>
                                                    <div class='value'>
                                                        <div class='input-group'>
                                                           <input type="radio" name="categoty" value="Breakfast"> Breakfast<br>
                                                            <input type="radio" name="categoty" value="Lunch"> Lunch<br>
                                                             <input type="radio" name="categoty" value="Dinner"> Dinner<br>  
                                                             <input type="radio" name="categoty" value="Supper"> Supper<br>  
                                                        </input>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class='form-row'>
                                                    <div class='name'>Food Price: </div>
                                                    <div class='value'>
                                                        <div class='input-group'>
                                                            <input class='input--style-5' type='double' id=myInput name='Price'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class='btn btn--radius-2 btn--red' type='submit' name='insert' value='insert'>INSERT</button>
                                                </div></form>     
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        function myFunction() {
                                          var x = document.getElementById("myInput");
                                          if (x.type === "password") {
                                            x.type = "text";
                                          } else {
                                            x.type = "password";
                                          }
                                        }
                                    </script>
 
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
       
   }?>
              
        
       
                        
                       
                    </div>
                </div>
            </div>
<?php
    include "includes/footer.php";
?>  
      
      

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
</body>
</html>
