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
                                <h2 class="bradcaump-title">Feecback</h2>
	                                <?php 
	                                		$sql="SELECT * FROM customer WHERE Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		$row = $result->fetch_assoc();
	                                		echo "
		                                		<form method=POST action=D_F_update.php>
		                                		<table style='margin: auto; width: 40%;'>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Name: </span></td>
		                                			<td><input type='text' name='Name'  id='Name'  value='".$row['Name']."' disabled>
		                                		</tr>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Your ID: </span></td>
		                                			<td><input type='text' name='CustID'  id='CustID'  value='".$row['CustID']."'readonly>
		                                		</tr>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>DespatcherID: </span></td>
		                                			<td><input type='text' name='despatcherID' id='despatcherID' size='35' ></input>
		                                			</td>
		                                		</tr>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Comment: </span></td>
		                                			<td><input type=Comment name=Comment id='Comment '  size='35'/></td>
		                                		</tr>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Rating: </span></td>
		                                			<td><select name=Rating>
		                                				<option value='5'>Very Good!</option>
		                                				<option value='4'>Good!</option>
		                                				<option value='3'>Average</option>
		                                				<option value='2'>Bad!</option>
		                                				<option value='1'>Very Bad!</option>
		                                				</select></td>

		                                		</tr>
		                                		<tr>
		                                		<td colspan=2><input class=Update type=submit name=submit id=upbtn value=submit ></input></td>
	                                			</tr>
	                                			
	                                			</table></form>";		
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