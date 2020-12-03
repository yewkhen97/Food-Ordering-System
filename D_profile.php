<?php
	include "includes/session.php";
	include "includes/head.php";
	include "includes/header_despatcher.php";
?>
	<div class="ht__bradcaump__area bg-image--1">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Profile</h2>
	                                <?php 
	                                		$sql="SELECT * FROM despatcher WHERE Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		$row = $result->fetch_assoc();
	                                		echo "
		                                		<form method=POST action=D_update.php>
		                                		<table style='margin: auto; width: 40%;'>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Name: </span></td>
		                                			<td><input type='text' name='Name'  id='Name'  value='".$row['Name']."'>
		                                		</tr>
		                                		<tr>
		                                			<td><span style='color: rgb(0, 0, 0)'>Vehicle: </span></td>
		                                			<td><input type='text' name='Vehicle' id='Vehicle' size='35' value='".$row["Vehicle"]."'>
		                                			</td>
		                                		</tr>
		                                		<tr>
		                                			<td><span style=color: rgb(0, 0, 0)>Password: </span></td>
		                                			<td><input type=text name=Password id=Password value='".$row["Password"]."'  /></td>
		                                		</tr>
		                                		<tr>
		                                			<td><span style=color: rgb(0, 0, 0)>Status: </span></td>
		                                			<td><input type=text name=Password id=Password value='".$row["RegStatus"]."' disabled /></td>
		                                		</tr>
		                                		<tr>
		                                		<td colspan=2><input class=Update type=submit name=update id=upbtn value=update ></input></td>
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