<?php
	include 'includes/session.php';
	include 'includes/head.php';
	include 'includes/header.php';
?>	
	<div class="ht__bradcaump__area bg-image--26">
            <div class="ht__bradcaump__wrap2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Order History</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	                               <div class="limiter">
									<div class="container-table100">
										<div class="wrap-table100">
											<div class="table100 ver2 m-b-110">
												<div class="table100-head">
													<table>
														<thead>
															
															<tr class="row100 head">
																<th class="cell100 column1">Item Name</th>
																<th class="cell100 column3">Price</th>
																<th class="cell100 column5">Date</th>
																<th class="cell100 column6">Quantity</th>
																<th class="cell100 column6">Total Price</th>
																<th class="cell100 column5">Status</th>
															</tr>
														</thead>
													</table>
												</div>

												<div class="table100-body js-pscroll">
													<table>
														<tbody>
															
	                                <?php 
	                                		$id=$user['CustID'];

	                                		$sql="SELECT * FROM cart JOIN payment WHERE PayStatus='Paid' AND CustID='$id' GROUP BY cart.CartID ";
	                                		$result=$conn->query($sql);
	                                		
	                                		while ($row = $result->fetch_assoc()) {

	                                			echo "
		                                		<tr class=row100 body>
		                                			<td class='cell100 column1'>".$row["Product"]."</td>
		                                			<td class='cell100 column3'>".$row["Price"]."</td>
		                                			<td class='cell100 column5'>".$row["PaymentDate"]."</td>
		                                			<td class='cell100 column6'>".$row["Quantity"]."</td>
		                                			<td class='cell100 column6'>".$row["Quantity"]*$row["Price"]."</td>
		                                			<td class='cell100 column7'>".$row["PayStatus"]."</td>
		                                		</tr>
		                                		";	
	                                		}	
	                                ?>
					                                </tbody>
												</table>
												
											</div>
										</div>
										<button class='update' id='graph' name=graph style="float: right;">Graph</button>
									</div>

								</div>
							</div>
							
							

						<script type="text/javascript">
						    document.getElementById("graph").onclick = function () {
						        location.href = "CusOrderGraph.php";
						    };
						</script>

	                                	

	
<?php
	include 'includes/footer.php';
?>