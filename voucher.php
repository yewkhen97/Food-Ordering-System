<?php
	include 'includes/session.php';
	include 'includes/head.php';
	include 'includes/header.php';
?>	
	<div class="ht__bradcaump__area bg-image--27">
            <div class="ht__bradcaump__wrap2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Voucher List</h2>
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
																<th class="cell100 column1">voucher ID</th>
																<th class="cell100 column4">Discount</th>
																<th class="cell100 column2">Due Date</th>
																<th class="cell100 column8"></th>
															</tr>
														</thead>
													</table>
												</div>

												<div class="table100-body js-pscroll">
													<table>
														<tbody>
	                                <?php 
	                                		$sql="SELECT voucher.voucherID, voucher.duedate, voucher.discount FROM voucher JOIN customer ON customer.CustID=voucher.CustID WHERE customer.Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		?>
	                                		
		                                		<?php
	                                		while ($row = $result->fetch_assoc()) {
	                                			echo "
		                                		<tr>
		                                			<form action=update.php method=POST>
		                                			<td class='cell100 column1'>".$row['voucherID']."</td>
		                                			<td class='cell100 column4'>".$row["discount"]."</td>
		                                			<td class='cell100 column2'>".$row["duedate"]."</td>
		                                			<td class='cell100 column8'><button class='update' type=submit name=delete value=".$row['voucherID'].">Delete</button></td>
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