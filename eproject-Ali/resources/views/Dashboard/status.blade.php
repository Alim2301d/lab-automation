<?php

$query = "select * from inventory";
$result = mysqli_query($db,$query);

?>




<div class="col-sm-12 col-xl-11" style="margin-left: 20px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">STATUS REPORTS</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">INV_ID</th>
                                        <th scope="col">MANUFACTURE_ID</th>
                                        <th scope="col">TOTAL QTY</th>
                                        <th scope="col">PACKING QTY</th>
                                        <th scope="col">RE MAKE QTY</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                         
                                         while($row=mysqli_fetch_array($result)){
                                           ?>
                                           <tr>
         
                                             <th scope="row"><?php echo $row["inventory_id"]?></th>
                                              <td><?php echo $row["Manufact_id"]?></td>
                                              <td  style="color:blue;"><?php echo $row["total"]?></td>
                                             <td style="color:green;"><b><?php echo $row["approve"]?></b></td>
                                              <td  style="color:red;"><b><?php echo $row["dissaprove"]?></b></td>
                              
                                             
                                           </tr>
                                             <?php
                                         }
                                         
                                         ?>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
