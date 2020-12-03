<?php
	include "includes/session.php";
	include "includes/head.php";
	include "includes/header.php";
?>
	<div class="ht__bradcaump__area bg-image--1">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Profile</h2>
	                                <?php 
	                                		$sql="SELECT * FROM customer WHERE Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		$row = $result->fetch_assoc();
	                                		echo "
		                                		<form method=POST action=update.php>
		                                		<table style='margin: auto; width: 30%;'>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Name: </span></td>
		                                			<td><input type='text' name='name'  id='name'  value='".$row['Name']."'>
		                                		</tr>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Address: </span></td>
		                                			<td><input type='text' name='address' id='address' size='35' value='".$row["Address"]."'>
		                                			</td>
		                                		</tr>
		                                		<tr>
		                                			<td><span style=color: rgb(0, 0, 0)>Password: </span></td>
		                                			<td><input type=text name=password id=password value='".$row["Password"]."'  /></td>
		                                		</tr>
		                                		<tr>
		                                		<td colspan=2><input class=Update type=submit name=update id=upbtn value=update ></input></td>
	                                			</tr></table></form>";		
	                                ?>
	                                <script type="text/javascript">
	                                	function update(){
	                                		<?php	$_SESSION['trigger']=1; ?>
			                                    location.reload();
	                                	}
	                                </script>
					                        </div>
					                    </div>
					                </div>
                            	</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
<?php
?>	