<?php
	include "includes/session.php";
	include "includes/head.php";
?>
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
						                    <h2 class="title">User Profile</h2>
						                </div>
						                <div class="card-body">
	                                <?php 
	                                		$sql="SELECT * FROM restaurant WHERE Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		$row = $result->fetch_assoc();
	                                		echo "
		                                		<form method=POST action=update_restaurant.php>
		                                		<div class='form-row'>
						                            <div class='name'>Name: </div>
						                            <div class='value'>
						                                <div class='input-group'>
						                                    <input class='input--style-5' type='text' name='name' value='".$row['Name']."' >
						                                </div>
						                            </div>
						                        </div>
		                                		<div class='form-row'>
						                            <div class='name'>Address: </div>
						                            <div class='value'>
						                                <div class='input-group'>
						                                    <input class='input--style-5' type='text' name='address' value='".$row["address"]."'>
						                                </div>
						                            </div>
						                        </div>
		                                		<div class='form-row'>
						                            <div class='name'>Password: </div>
						                            <div class='value'>
						                                <div class='input-group'>
						                                    <input class='input--style-5' type='password' id=myInput name='password' value='".$row["Password"]."'><input type=checkbox onclick=myFunction()>
						                                </div>
						                            </div>
						                        </div>
		                                		<div class='form-row'>
						                            <div class='name'>Phone Number: </div>
						                            <div class='value'>
						                                <div class='input-group'>
						                                    <input class='input--style-5' type='text' name='phone' value='".$row["phone_no"]."'>
						                                </div>
						                            </div>
						                        </div>
		                                	
		                                		<div>
						                            <button class='btn btn--radius-2 btn--red' type='submit' name='update' value='update'>Update</button>
						                        </div></form>";		
	                                ?>
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
<?php
	include "includes/footer.php";
?>	