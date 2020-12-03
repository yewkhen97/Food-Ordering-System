<?php
	include 'includes/session.php';
	include 'includes/head.php';
	include 'includes/header_restaurant.php';
?>	
	<div class="ht__bradcaump__area bg-image--28">
            <div class="ht__bradcaump__wrap2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Food List</h2>
                                 			</div>
					                    </div>
					                </div>
                            	</div>
	                        </div>
	                    </div>
	                    <div class="limiter">
									<div class="container-table100">
										<div class="wrap-table100">
											<div class="table100 ver4 m-b-110">
												<div class="table100-head">
													<table>
														<thead>
															
															<tr class="row100 head">
																<th class="cell100 column1">Food Name</th>
																<th class="cell100 column2">Food Description</th>
																<th class="cell100 column3">Category</th>
																<th class="cell100 column4">Price(RM)</th>
																<th class="cell100 column5">Status</th>
																<th class="cell100 column8"></th>
															</tr>
														</thead>
													</table>
												</div>

												<div class="table100-body js-pscroll">
													<table>
														<tbody>
	                                <?php 
	                                		$sql="SELECT item.ItemID, item.ItemName, item.ItemDesc, item.category,item.Price,item.Status FROM item JOIN restaurant ON restaurant.ResID=item.ResID WHERE restaurant.Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		?>
	                                		
		                                		<?php
	                                		while ($row = $result->fetch_assoc()) {
	                                			echo "
		                                		<tr>
		                                			<form action=update_restaurant.php method=POST>
		                                			<td class='cell100 column1'><input type=text name=ItemName value='".$row["ItemName"]."'></td>
		                                			<td class='cell100 column2'><input type=text name=ItemDesc value='".$row["ItemDesc"]."'></td>
		                                			<td class='cell100 column3'><select name=category>
 														 <option value='".$row["category"]."'>".$row["category"]."</option>
  																<option value=Breakfast>Breakfast</option>
  														<option value=Lunch>Lunch</option>
  														<option value=Dinner>Dinner</option>
  														<option value=Supper>Supper</option>
														</select></td>
		                                			<td class='cell100 column4'><input type=text name=Price value='".$row["Price"]."'></td>
		                                			<td class='cell100 column5'><select name=Status>
 														 <option value='".$row["Status"]."'>".$row["Status"]."</option>
  																<option value=Available>Available</option>
  														<option value='Not Available'>Not Available</option>
														</select></td>
		                                			<td class='cell100 column8'><button class='update' type=submit name=updatefood value=".$row['ItemID'].">Update</button></td>
		                                			</form>
		                                		</tr>
		                                		";	
	                                		}	
	                                ?>
					                     </tbody>  
					                 </table>
					             </div>
					         </div>
					     </div>
					 </div>
					</div>
	                                		
<?php
	include 'includes/footer.php';
?>