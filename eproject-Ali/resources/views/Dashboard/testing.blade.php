<?php
include("config.php");
$query = "SELECT * FROM `testing`";
$result = mysqli_query($db,$query);


?>

<div class="col-sm-12 col-xl-11" style="margin-left: 20px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">TESTING DETAILS</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">TESTING_ID</th>
                                        <th scope="col">MANUFACT_ID</th>
                                        <th scope="col">TEST_ID</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">QUANTITY</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ACTION</th>

                                        
                                    </tr>
                                </thead>
                                <tbody  id="myTable">
                                    <?php
                                        while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                        <th scope="row"><?php echo $row["testing_id"] ?></th>
                                        <td><?php echo $row["manufact_id"] ?></td>
                                        <td><?php echo $row["test_id"] ?></td>
                                        <td><?php echo $row["date"] ?></td>
                                        <td><?php echo $row["quantity"] ?></td>
                                        <?php
                                     
                                     if($row["status"]==0){
                                        // if zero featured
                                        
                                        ?>
                                            <td>Pending</td>
                                            <td> <a href="?page=report_form.php&testing_id=<?php echo $row["testing_id"] ?>&qty=<?php echo $row["quantity"] ?>&man_id=<?php echo $row["manufact_id"] ?>" class="btn btn-success rounded m-2">Clear</a></td>
                                            
                                            <?php
                                     }else{

                                        ?>
                                        <!-- if not zero -->

                                        <td>Clear</td>
                                        <td> <a class="btn btn-warning rounded m-2">Cleared</a></td>
                                            
                                        
                                      <?php 
                                     }
                                     
                                     ?>
                                     
                                        

                                    </tr>
                                    
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>