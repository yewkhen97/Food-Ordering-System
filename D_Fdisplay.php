<?php
	include "includes/session.php";
	include "includes/head.php";
	include "includes/header_admin.php";
?>
<div class="ht__bradcaump__area bg-image--26">
            <div class="ht__bradcaump__wrap2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Feedback from customer</h2>
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
																<th class="cell100 column2">Name of Despatcher</th>
																<th class="cell100 column3">Username</th>
																<th class="cell100 column4">Comment</th>
																<th class="cell100 column5">Rating</th>
															</tr>
														</thead>
													</table>
												</div>

												<div class="table100-body js-pscroll">
													<table>
														<tbody>
															
	                                <?php 
	                                		$select = "SELECT * from despatcher join feedback on despatcher.DespatcherID=feedback.DespatcherID";
	                                		$result=$conn->query($select);
	                                		
	                                		while ($row = $result->fetch_assoc()) {
	                                			echo "
		                                		<tr class=row100 body>
		                                			<td class='cell100 column1'>".$row['DespatcherID']."</td>
		                                			<td class='cell100 column2'>".$row["DesName"]."</td>
		                                			<td class='cell100 column3'>".$row["Username"]."</td>
		                                			<td class='cell100 column4'>".$row["Comment"]."</td>
		                                			<td class='cell100 column5'>".$row["Rating"]."</td>
		         
		                                		</tr>
		                                		";	
	                                		}	
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