<?php
	include "includes/session.php";
	include "includes/head.php";
	include "includes/header_despatcher.php";
?>
<div class="ht__bradcaump__area bg-image--26">
            <div class="ht__bradcaump__wrap2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Sales report for despatcher</h2>
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
																<th class="cell100 column1">Despatcher ID</th>
																<th class="cell100 column2">Restaurant ID</th>
																<th class="cell100 column3">Customer ID</th>
																<th class="cell100 column4">Time</th>
																<th class="cell100 column5">Deliver Status</th>
															
															</tr>
														</thead>
													</table>
												</div>

												<div class="table100-body js-pscroll">
													<table>
														<tbody>
															
	                                <?php 
	                                		$select = "SELECT * from despatcher a join orderdetail b on a.DespatcherID=b.DespatcherID where Username='".$_SESSION['user']."' AND Status='Received'";
	                                		$result=$conn->query($select);
	                                		
	                                		while ($row = $result->fetch_assoc()) {
	                                			echo "
		                                		<tr class=row100 body>
		                                			<td class='cell100 column1'>".$row['DespatcherID']."</td>
		                                			<td class='cell100 column2'>".$row["ResID"]."</td>
		                                			<td class='cell100 column2'>".$row["CustID"]."</td>
		                                			<td class='cell100 column3'>".$row["Time"]."</td>
		                                			<td class='cell100 column5'>".$row["Status"]."</td>
		         
		                                		</tr>
		                                		";	
	                                		} ?>
	                                	<?php	$select1 = "SELECT b.Status, a.DespatcherID, Count(a.DespatcherID) as number from despatcher a join orderdetail b on a.DespatcherID=b.DespatcherID where Username='".$_SESSION['user']."'AND b.Status='Received'";
	                                		$result1=$conn->query($select1);
	                                		if (mysqli_num_rows($result1) > 0) {
	                                		while($row = mysqli_fetch_array($result1)) {	
	                                		echo "
	                                		<tr class=row100 body>
	                                		<td class='cell100 column1'>Total job taken</td>
	                                		<td class='cell100 column1'>".$row['number']."
	                                		<td class='cell100 column1'>Total earning</td>";
	                                		$total =$row['number']*2;
	                                		echo"<td class='cell100 column1'>".$total."
	                                		</td>";}}
	                                ?>
					                                </tbody>
												</table>
												
											</div>
										</div>
										<button class='update' id='Back' name=Back style="float: right;">Back</button>
									</div>

								</div>
							</div>
							<script type="text/javascript">
						    document.getElementById("Back").onclick = function () {
						        location.href = "index.php";
						    };
						</script>
<?php
	include 'includes/footer.php';
?>