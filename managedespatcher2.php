<?php
	include 'includes/session.php';
	include 'includes/head.php';
	include 'includes/header_despatcher.php';
?>	
	<div class="ht__bradcaump__area bg-image--29">
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
																<th class="cell100 column2">Customer ID</th>
																<th class="cell100 column3">TIME</th>
																<th class="cell100 column4">ETA</th>
																<th class="cell100 column5">Address</th>
																<th class="cell100 column8"></th>
																<th class="cell100 column5">Deliver Status</th>
																<th class="cell100 column8">
																Action    
																</th>

																<th>
																</th>
															</tr>
														</thead>
													</table>
												</div>

												<div class="table100-body js-pscroll">
													<table>
														<tbody>
	                                <?php 
	                                		$sql="SELECT * FROM orderdetail JOIN despatcher ON orderdetail.DespatcherID=despatcher.DespatcherID JOIN customer ON customer.CustID=orderdetail.CustID WHERE despatcher.Username='".$_SESSION['user']."' AND (orderdetail.Status ='On Deliver')";
	                                		$result=$conn->query($sql);
	                                		?>
	                                		
		                                		<?php
	                                		while ($row = $result->fetch_assoc()) {
	                                			echo "
		                                		<tr>
		                                			<form action=update_despatherorder.php method=POST>
		                                			<td class='cell100 column1'><input type=text name=Order ID value='".$row["OrderID"]."'></td>
		                                			<td class='cell100 column2'><input type=text name=Customer ID value='".$row["CustID"]."'></td>
		                                			<td class='cell100 column3'><input type=text name=Time value='".$row["Time"]."'></td>
		                                			<td class='cell100 column4'><input type=text name=ETA value='".$row["ETA"]."'></td>
		                                			<td class='cell100 column4'><input type=text name=Address value='".$row["Address"]."'></td>
		                                			<td class='cell100 column5'><select name=Status>
 														 <option value='".$row["Status"]."'>".$row["Status"]."</option>
  																<option value=Delivered>Delivered</option>
														</select></td>
		                                			<td class='cell100 column8'><button class='update' type=submit name=updatedeliver2 value=".$row['OrderID'].">Update</button></td>
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