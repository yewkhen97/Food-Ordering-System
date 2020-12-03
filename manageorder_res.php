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
                                <h2 class="bradcaump-title">Manage Order</h2>
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
																<th class="cell100 column1">ORDER ID</th>
																<th class="cell100 column2">FOOD NAME</th>
																<th class="cell100 column3">TIME</th>
																<th class="cell100 column4">ETA</th>
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
	                                		$sql="SELECT orderdetail.OrderID,item.itemName,orderdetail.Time,orderdetail.ETA,orderdetail.Status FROM orderdetail JOIN restaurant ON restaurant.ResID=orderdetail.ResID JOIN item ON orderdetail.ItemID=item.ItemID WHERE restaurant.Username='".$_SESSION['user']."' AND orderdetail.Status='Paid'";
	                                		$result=$conn->query($sql);
	                                		?>
	                                		
		                                		<?php
	                                		while ($row = $result->fetch_assoc()) {
	                                			echo "
		                                		<tr>
		                                			<form action=update_restaurant.php method=POST>
		                                			<td class='cell100 column1'><input type=text name=Order ID value='".$row["OrderID"]."'></td>
		                                			<td class='cell100 column2'><input type=text name=Item Name value='".$row["itemName"]."'></td>
		                                			<td class='cell100 column3'><input type=text name=Time value='".$row["Time"]."'></td>
		                                			<td class='cell100 column4'><input type=text name=ETA value='".$row["ETA"]."'></td>
		                                			<td class='cell100 column5'><select name=Status>
 														 <option value='".$row["Status"]."'>".$row["Status"]."</option>
  																<option value=Prepared>Prepared</option>
														</select></td>
		                                			<td class='cell100 column8'><button class='update' type=submit name=updateprepared value=".$row['OrderID'].">Update</button></td>
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