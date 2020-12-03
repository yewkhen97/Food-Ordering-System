<?php
    include 'includes/session.php';
    include 'includes/head.php';
    include 'includes/header_admin.php';
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
                                            <div class="table100 ver5 m-b-110">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            
                                                            <tr class="row100 head">
                                                                <th class="cell100 column1">Name</th>
                                                                <th class="cell100 column2">Address</th>
                                                                <th class="cell100 column3">Status</th>
                                                               <th class="cell100 column4">Company Registration Document</th>
                                                                <th class="cell100 column5"></th>
                                                                <th class="cell100 column6"></th>
                                                                 
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>

                                                <div class="table100-body js-pscroll">
                                                    <table>
                                                        <tbody>
                                    <?php 

                                
                                            $sql="SELECT a.name, a.address, a.RegStatus,a.ResID,a.Username,record.username,record.name_blob FROM user b INNER JOIN restaurant a ON a.Username=b.Username JOIN record ON b.username=record.username";
                                           
                                      
                                            $result=$conn->query($sql);
                                   
                                            ?>
                                            
                                                <?php
                                            while ($row = $result->fetch_assoc()) {
                                                 
                                                echo "
                                                <tr>
                                                    <form action=update_restaurant_admin.php method=POST>
                                                    <td class='cell100 column1'><input type=text name=Name value='".$row["name"]."'></td>
                                                    <td class='cell100 column2'><input type=text name=address value='".$row["address"]."'></td>
                                                    <td class='cell100 column3'><select name=RegStatus>
                                                         <option value='".$row["RegStatus"]."'>".$row["RegStatus"]."</option>
                                                                <option value=Approved>Approved</option>
                                                        <option value=Pending>Pending</option>
                                                        </select></td>
<td class='cell100 column4'><li><a href='view.php?username=".$row['username']."'>".$row['name_blob']."</a></li></td>
                                                         
                                                         <input type=hidden id=ResID name=ResID value=".$row['ResID'].">
                                                    <td class='cell100 column5'><button class='update' type=submit name=updateres value=".$row['Username'].">Update</button></td>
                                                    <td class='cell100 column6'><button class='update' type=submit name=deleteres value=".$row['Username'].">Delete</button></td>
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