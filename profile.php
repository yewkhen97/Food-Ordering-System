<?php
	include "includes/session.php";
	include "includes/head.php";
	include "includes/header.php";
?>
	
                                <div class="wrapper wrapper--w790">
						            <div class="card card-5">
						                <div class="card-heading">
						                    <h2 class="title">User Profile</h2>
						                </div>
						                <div class="card-body">
	                                <?php 
	                                		$sql="SELECT * FROM customer WHERE Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		$row = $result->fetch_assoc();
	                                		echo "
		                                		<form method=POST action=update.php>
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
						                                    <input class='input--style-5' type='text' name='address' value='".$row["Address"]."'>
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
						                                    <input class='input--style-5' type='text' name='phone' value='".$row["phoneNum"]."'>
						                                </div>
						                            </div>
						                        </div>
		                                		<div class='form-row'>
						                            <div class='name'>E-mail: </div>
						                            <div class='value'>
						                                <div class='input-group'>
						                                    <input class='input--style-5' type='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' name='email' value='".$row["email"]."'>
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
	                                                                
					              
<?php
	include "includes/footer.php";
?>	