<?php

$query = "select * from inventory";
$result = mysqli_query($db,$query);

?>




<div class="col-sm-12 col-xl-11" style="margin-left: 20px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">INVENTORY REPORTS</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">INV_ID</th>
                                        <th scope="col">MANUFACTURE_ID</th>
                                        <th scope="col">TESTING_ID</th>
                                        <th scope="col">ENTRY_DATE</th>
                                        <th scope="col">TOTAL_QUANTITY</th>
                                        
                                    </tr>
                                </thead>
                                <tbody  id="myTable">
                                <?php
                                         
                                         while($row=mysqli_fetch_array($result)){
                                           ?>
                                           <tr>
         
                                             <th scope="row"><?php echo $row["inventory_id"]?></th>
                                              <td><?php echo $row["Manufact_id"]?></td>
                                              <b>    <td><?php echo $row["testing_id"]?></td>
                                              <td ><?php echo $row["entry date"]?></td>
                                              <td style="color: green;"><?php echo $row["total"]?></td>
                                             </b>
                                             
                                           </tr>
                                             <?php
                                         }
                                         
                                         ?>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
